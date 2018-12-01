<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Sequence
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Sequence
{
    /**
     * @var int
     */
    private $value;

    /**
     * Construtor
     * 
     * @param string $value
     */
    public function __construct(int $value = 1)
    {
        $this->setValue($value);
    }

    /**
     * Return the value from sequence
     *
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Set the value from sequence
     *
     * @param int $value
     */
    public function setValue(int $value)
    {
        $this->value = $value;
    }
}
