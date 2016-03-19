<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 18:12
 */

namespace Deployer\DependencyInjection;

use Pimple\Container;

interface ContainerAwareInterface
{
    /**
     * @param Container $container
     */
    public function setContainer(Container $container);
}