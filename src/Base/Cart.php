<?php
namespace MrPrompt\ShipmentCommon\Base;

use ArrayObject;
use stdClass;

/**
 * Cart
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Cart extends ArrayObject
{
    /**
     * @param stdClass $item
     */
    public function addItem(stdClass $item)
    {
        $this->append($item);
    }

    /**
     * @param int $item
     */
    public function removeItem(int $item): bool
    {
        $this->offsetUnset($item);

        return true;
    }
}