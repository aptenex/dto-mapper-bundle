<?php

namespace Tests\DataFixtures\Annotation;

use VKMapperBundle\Annotation\MappingMeta\DestinationClass;

/**
 * Class EmbeddedCollectionNodeDTO
 * @DestinationClass
 */
class EmbeddedCollectionNodeDTO
{
    public $nodePropA;
    public $nodePropB;
    public $nodePropC;

    /**
     * @return mixed
     */
    public function getNodePropA()
    {
        return $this->nodePropA;
    }

    /**
     * @return mixed
     */
    public function getNodePropB()
    {
        return $this->nodePropB;
    }

    /**
     * @return mixed
     */
    public function getNodePropC()
    {
        return $this->nodePropC;
    }
}
