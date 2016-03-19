<?php
/**
 * User: mazasb
 * Date: 2016. 03. 19.
 * Time: 17:11
 */

namespace Deployer\Configuration;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class TasksConfiguration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('database');

        $rootNode
            ->children()
                ->arrayNode('tasks')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}