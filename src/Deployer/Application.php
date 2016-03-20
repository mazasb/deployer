<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 17:07
 */

namespace Deployer;

use Deployer\DependencyInjection\ContainerAwareInterface;
use Pimple\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Application extends \Symfony\Component\Console\Application
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @param string $name
     * @param string $version
     * @param Container $container
     */
    public function __construct($name, $version, Container $container)
    {
        // TODO: strict standards parent construct?
        parent::__construct($name, $version);

        $this->addCommands($container['commands']);
        $this->container = $container;
    }

    /**
     * @inheritDoc
     */
    protected function doRunCommand(Command $command, InputInterface $input, OutputInterface $output)
    {
        if ($command instanceof ContainerAwareInterface)
        {
            $command->setContainer($this->container);
        }

        return parent::doRunCommand($command, $input, $output);
    }
}