<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Authorization
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Authorization
{
    /**
     * @var int
     */
    private $number;

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }
}
