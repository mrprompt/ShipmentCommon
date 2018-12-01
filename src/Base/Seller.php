<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Seller
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Seller extends Person
{
    /**
     * @var int
     */
    private $code;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }
}
