<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Phone number
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Phone
{
    /**
     * @const int
     */
    const CELLPHONE = 1;

    /**
     * @const int
     */
    const TELEPHONE = 2;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $type;

    /**
     * Constructor
     *
     * @param int $type
     * @param int $number
     */
    public function __construct(int $type = self::TELEPHONE, int $number = 0)
    {
        $this->type = $type;
        $this->number = $number;
    }

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

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type = self::CELLPHONE)
    {
        $this->type = $type;
    }
}
