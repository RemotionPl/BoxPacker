<?php
/**
 * Box packing (3D bin packing, knapsack problem)
 * @package BoxPacker
 * @author Doug Wright
 */

namespace DVDoug\BoxPacker\Test;

use DVDoug\BoxPacker\Box;

class TestBox implements Box
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var int
     */
    private $outerWidth;

    /**
     * @var int
     */
    private $outerLength;

    /**
     * @var int
     */
    private $outerDepth;

    /**
     * @var int
     */
    private $emptyWeight;

    /**
     * @var int
     */
    private $innerWidth;

    /**
     * @var int
     */
    private $innerLength;

    /**
     * @var int
     */
    private $innerDepth;

    /**
     * @var int
     */
    private $maxWeight;

    /**
     * TestBox constructor.
     *
     * @param string $reference
     * @param int $outerWidth
     * @param int $outerLength
     * @param int $outerDepth
     * @param int $emptyWeight
     * @param int $innerWidth
     * @param int $innerLength
     * @param int $innerDepth
     * @param int $maxWeight
     */
    public function __construct(
        string $reference,
        int $outerWidth,
        int $outerLength,
        int $outerDepth,
        int $emptyWeight,
        int $innerWidth,
        int $innerLength,
        int $innerDepth,
        int $maxWeight
    ) {
        $this->reference = $reference;
        $this->outerWidth = $outerWidth;
        $this->outerLength = $outerLength;
        $this->outerDepth = $outerDepth;
        $this->emptyWeight = $emptyWeight;
        $this->innerWidth = $innerWidth;
        $this->innerLength = $innerLength;
        $this->innerDepth = $innerDepth;
        $this->maxWeight = $maxWeight;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return int
     */
    public function getOuterWidth()
    {
        return $this->outerWidth;
    }

    /**
     * @return int
     */
    public function getOuterLength()
    {
        return $this->outerLength;
    }

    /**
     * @return int
     */
    public function getOuterDepth()
    {
        return $this->outerDepth;
    }

    /**
     * @return int
     */
    public function getEmptyWeight()
    {
        return $this->emptyWeight;
    }

    /**
     * @return int
     */
    public function getInnerWidth()
    {
        return $this->innerWidth;
    }

    /**
     * @return int
     */
    public function getInnerLength()
    {
        return $this->innerLength;
    }

    /**
     * @return int
     */
    public function getInnerDepth()
    {
        return $this->innerDepth;
    }

    /**
     * @return int
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }
}

