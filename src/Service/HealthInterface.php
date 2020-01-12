<?php

namespace niklesh\HealthCheckBundle\Service;

use niklesh\HealthCheckBundle\Entity\HealthDataInterface;

interface HealthInterface
{
    const TAG = 'health.service';

    public function getName(): string;
    public function getHealthInfo(): HealthDataInterface;
}