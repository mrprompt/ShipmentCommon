<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Client
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Client
{
    /**
     * @var int
     */
    private $code;

    /**
     * @param int $code
     */
    public function __construct(int $code = null)
    {
        $this->code = $code;
    }

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
