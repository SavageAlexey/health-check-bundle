<?php

namespace niklesh\HealthCheckBundle\Entity;

interface HealthDataInterface
{
    const STATUS_OK = 1;
    const STATUS_WARNING = 2;
    const STATUS_DANGER = 3;
    const STATUS_CRITICAL = 4;

    public function getStatus(): int;
    public function getAdditionalInfo(): array;
}