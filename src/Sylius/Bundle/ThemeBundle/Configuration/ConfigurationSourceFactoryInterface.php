<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ThemeBundle\Configuration;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

interface ConfigurationSourceFactoryInterface
{
    public function buildConfiguration(ArrayNodeDefinition $node): void;

    /**
     * @see ConfigurationProviderInterface
     *
     * @return Reference|Definition Configuration provider service
     */
    public function initializeSource(ContainerBuilder $container, array $config);

    public function getName(): string;
}
