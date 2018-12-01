<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Bank
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Bank
{
    const BANCO_DO_BRASIL           = 30;
    const HSBC                      = 36;
    const SANTANDER                 = 54;
    const CAIXA_ECONOMICA_FEDERAL   = 55;
    const SICRED                    = 79;

    /**
     * Agency number
     * 
     * @var int
     */
    private $agency;

    /**
     * Agency Digit
     *
     * @var number
     */
    private $digit;

    /**
     * Bank code
     *
     * @var number
     */
    private $code;

    /**
     * Constructor
     */
    public function __construct(
        int $agency = 0,
        int $digit = 0,
        int $code = 0
    ) {
        $this->agency = $agency;
        $this->digit = $digit;
        $this->code = $code;
    }

    /**
     * @return the $agency
     */
    public function getAgency(): int
    {
        return $this->agency;
    }

    /**
     * Set the agency
     *
     * @param number $agency
     */
    public function setAgency(int $agency)
    {
        $this->agency = $agency;
    }

    /**
     * @return the $agencyDigit
     */
    public function getDigit(): int
    {
        return $this->digit;
    }

    /**
     * Set the digt
     *
     * @param number $digit
     */
    public function setDigit(int $digit)
    {
        $this->digit = $digit;
    }

    /**
     * @return number
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param number $code
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }
}
