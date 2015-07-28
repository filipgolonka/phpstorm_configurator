<?php

namespace spec\Phpstorm\Configurator\Configuration;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SettingsSpec extends ObjectBehavior
{
    function let()
    {
        $indentPhp = 4;
        $indentJs = 4;
        $indentGherkin = 4;
        $indentYml = 4;

        $this->beConstructedWith('phpmd_rules_file.xml', 'phpcs_rules_file.xml', $indentPhp, $indentJs, $indentGherkin, $indentYml);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Phpstorm\Configurator\Configuration\Settings');
    }

    function it_should_return_phpmd_filename()
    {
        $this->getPhpMdFilename()->shouldReturn('phpmd_rules_file.xml');
    }

    function it_should_return_phpcs_filename()
    {
        $this->getPhpCsFilename()->shouldReturn('phpcs_rules_file.xml');
    }
}
