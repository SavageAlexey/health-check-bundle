<?php

namespace savageh\HealthCheckBundle\DependencyInjection\Compiler;

use savageh\HealthCheckBundle\Controller\HealthController;
use savageh\HealthCheckBundle\Service\HealthInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class HealthServicesPath implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(HealthController::class)) {
            return;
        }

        $controller = $container->findDefinition(HealthController::class);
        foreach (array_keys($container->findTaggedServiceIds(HealthInterface::TAG)) as $serviceId) {
            $controller->addMethodCall('addHealthService', [new Reference($serviceId)]);
        }
    }
}