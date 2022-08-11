<?php

declare(strict_types=1);

namespace Ikuzo\SyliusSupportPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('ikuzo_sylius_suppoer_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
