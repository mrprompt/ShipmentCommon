<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Document
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Document
{
    /**
     * CPF - for individual
     *
     * @const int
     */
    const CPF = 1;

    /**
     * CNPJ - for Legal Entity
     *
     */
    const CNPJ = 2;

    /**
     * @var string
     */
    private $type = self::CPF;

    /**
     * @var int
     */
    private $number;

    /**
     * @param int $type
     */
    public function __construct(int $type = self::CPF)
    {
        $this->setType($type);
    }

    /**
     * @return string
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }
}
