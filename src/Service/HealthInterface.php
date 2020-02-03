<?php

namespace savageh\HealthCheckBundle\Service;

use savageh\HealthCheckBundle\Entity\HealthDataInterface;

interface HealthInterface
{
    const TAG = 'health.service';

    public function getName(): string;
    public function getHealthInfo(): HealthDataInterface;
}