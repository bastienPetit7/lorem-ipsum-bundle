<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('knpu_lorem_ipsum');

        $rootNode
            ->children()
                ->booleanNode('unicorns_are_real')->defaultTrue()->end()
                ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end()
        ;

        return $treeBuilder;
    }
}