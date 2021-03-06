<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 17:03
 */

namespace Deployer\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TaskRunnerCommand extends AbstractRunnerCommand
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('run-task');

        parent::configure();
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output); // TODO: Change the autogenerated stub
    }
}