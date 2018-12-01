<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Holder
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Holder extends Person
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
     * @return void
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }
}
