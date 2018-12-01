<?php
namespace MrPrompt\ShipmentCommon\Base;

use DateTime;

/**
 * Credit card
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class CreditCard
{
    const AMEX          = 38;
    const MASTERCARD    = 39;
    const HIPERCARD     = 40;
    const DINNERS       = 41;
    const DISCOVER      = 45;
    const VISA          = 42;
    const AURA          = 51;
    const ELO           = 60;
    const GOODCARD      = 61;
    const JCB           = 62;
    const MAIS          = 63;
    const CABAL         = 64;
    const SOROCRED      = 65;
    const SICREDI       = 66;
    const COOPERCRED    = 67;
    const AVISTA        = 68;

    /**
     *
     * @var numeric
     */
    private $number;

    /**
     *
     * @var DateTime
     */
    private $validate;

    /**
     *
     * @var numeric
     */
    private $security;

    /**
     * @var numeric
     */
    private $flag;

    /**
     * Constructor
     */
    public function __construct(DateTime $validate = null)
    {
        $this->validate = $validate ?? new DateTime();
    }

    /**
     * @return the $number
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return the $validate
     */
    public function getValidate(): DateTime
    {
        return $this->validate;
    }

    /**
     * @param DateTime $validate
     */
    public function setValidate(DateTime $validate)
    {
        $this->validate = $validate;
    }

    /**
     * @return the $security
     */
    public function getSecurityNumber(): string
    {
        return $this->security;
    }

    /**
     * @param string $security
     */
    public function setSecurityNumber(string $security)
    {
        $this->security = $security;
    }

    /**
     * @return int
     */
    public function getFlag(): int
    {
        return $this->flag;
    }

    /**
     * @param int $flag
     */
    public function setFlag(int $flag)
    {
        $this->flag = $flag;
    }
}
