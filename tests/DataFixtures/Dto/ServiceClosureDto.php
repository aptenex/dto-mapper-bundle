<?php

namespace Tests\DataFixtures\Dto;

use VK\DTOMapperBundle\Annotation\MappingMeta\DestinationClass;
use VK\DTOMapperBundle\Annotation\MappingMeta\Strategy;

/**
 * Class ServiceClosureDto
 * @DestinationClass
 */
class ServiceClosureDto
{
    /**
     * @Strategy\ServiceClosureStrategy(
     *     source="Tests\DataFixtures\Model\Closure\ClosureSource",
     *     provider="Tests\DataFixtures\Model\Closure\ClosureProvider",
     *     method="getClosure"
     * )
     */
    public $myValue;
}
