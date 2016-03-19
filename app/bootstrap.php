<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 17:59
 */

use Deployer\Application;
use Deployer\Configuration\ApplicationProvider;
use Pimple\Container;

require __DIR__ . '/../vendor/autoload.php';

$application = new Application();
$container = new Container();
$container->register(new ApplicationProvider());
$application->setContainer($container);