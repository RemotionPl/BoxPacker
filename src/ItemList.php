<?php
/**
 * Box packing (3D bin packing, knapsack problem)
 * @package BoxPacker
 * @author Doug Wright
 */

namespace DVDoug\BoxPacker;

/**
 * List of items to be packed, ordered by volume
 * @author Doug Wright
 * @package BoxPacker
 */
class ItemList extends \SplMaxHeap
{

    /**
     * Compare elements in order to place them correctly in the heap while sifting up.
     *
     * @see \SplMaxHeap::compare()
     *
     * @param Item $itemA
     * @param Item $itemB
     *
     * @return int
     */
    public function compare($itemA, $itemB)
    {
        $itemAVolume = $itemA->getWidth() * $itemA->getLength() * $itemA->getDepth();
        $itemBVolume = $itemB->getWidth() * $itemB->getLength() * $itemB->getDepth();
        if ($itemAVolume > $itemBVolume) {
            $compared =  -1;
        } elseif ($itemAVolume == $itemBVolume) {
            $compared =  0;
        } else  {
            $compared =  1;
         }

        return $compared?: ($itemA->getWeight() - $itemB->getWeight());
    }

    /**
     * Get copy of this list as a standard PHP array
     * @return array
     */
    public function asArray()
    {
        $return = [];
        foreach (clone $this as $item) {
            $return[] = $item;
        }
        return $return;
    }
}
