<?php

namespace VK\DTOMapperBundle\Annotation\MappingMeta;

use Doctrine\Common\Annotations\Annotation;
use VK\DTOMapperBundle\Annotation\Exception\InvalidTargetClassException;

/**
 * @Annotation
 * @Annotation\Target("PROPERTY")
 */
class EmbeddedCollection
{
    /**
     * @Annotation\Required()
     */
    public $target;

    /**
     * @var bool
     */
    public $multi = true;

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     *
     * @return self
     */
    public function setTarget(string $target): self
    {
        if (\class_exists($target)) {
            throw new InvalidTargetClassException("$target - class is not registered.");
        }

        $this->target = $target;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMulti(): bool
    {
        return $this->multi;
    }
}
