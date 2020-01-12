<?php

namespace niklesh\HealthCheckBundle\Service;

use niklesh\HealthCheckBundle\Entity\HealthDataInterface;

interface HealthInterface
{
    public function getName(): string;
    public function getHealthInfo(): HealthDataInterface;
}