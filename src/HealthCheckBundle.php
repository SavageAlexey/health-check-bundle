<?php

namespace savageh\HealthCheckBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use savageh\HealthCheckBundle\DependencyInjection\Compiler\HealthServicesPath;
use savageh\HealthCheckBundle\Service\HealthInterface;

/**
 * Class HealthCheckBundle
 * @package savageh\HealthCheckBundle
 * @codeCoverageIgnore
 */
class HealthCheckBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new HealthServicesPath());
        $container->registerForAutoconfiguration(HealthInterface::class)->addTag(HealthInterface::TAG);
    }
}