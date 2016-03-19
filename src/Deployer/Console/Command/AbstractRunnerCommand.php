<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 16:36
 */

namespace Deployer\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;

abstract class AbstractRunnerCommand extends Command
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this
            ->addArgument(
                'environment',
                InputArgument::REQUIRED,
                'Please specify the environment!'
            )
        ;
    }
}