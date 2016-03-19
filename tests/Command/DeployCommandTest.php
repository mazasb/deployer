<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 11:02
 */

namespace Command;

use Deployer\Command\DeployCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class DeployCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new DeployCommand());

        $command = $application->find('deploy');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['command' => $command->getName()]);

//        $this->assertRegExp('/.../', $commandTester->getDisplay());
        $this->assertTrue(true);
    }
}