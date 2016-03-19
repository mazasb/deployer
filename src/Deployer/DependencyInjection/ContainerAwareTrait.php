<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 17:47
 */

namespace Deployer;

use Pimple\Container;

trait ContainerAwareTrait
{
    /**
     * @var Container
     */
    protected $container;

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param Container $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }
}