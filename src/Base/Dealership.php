<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Dealership
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Dealership
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * Return the dealeship code
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * Dealership code
     *
     * @param int $code
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
