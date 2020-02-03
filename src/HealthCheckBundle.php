<?php

namespace savageh\HealthCheckBundle;

use savageh\HealthCheckBundle\DependencyInjection\Compiler\HealthServicesPath;
use savageh\HealthCheckBundle\Service\HealthInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

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
        $container->addCompilerPass(new \savageh\HealthCheckBundle\DependencyInjection\Compiler\HealthServicesPath());
        $container->registerForAutoconfiguration(\savageh\HealthCheckBundle\Service\HealthInterface::class)->addTag(\savageh\HealthCheckBundle\Service\HealthInterface::TAG);
    }
}