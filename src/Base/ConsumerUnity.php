<?php
namespace MrPrompt\ShipmentCommon\Base;

use DateTime;

/**
 * Consumer Unity
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class ConsumerUnity
{
    const BANDEIRANTE       = 1;
    const CPFL              = 3;
    const CPFL_PIRATININGA  = 4;
    const AMPLA             = 5;
    const ESCELSA_ES        = 19;
    const CELESC            = 26;
    const RGE_RS            = 31;
    const COELCE            = 73;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $code;

    /**
     * @var DateTime
     */
    private $read;

    /**
     * @var DateTime
     */
    private $maturity;

    /**
     * Constructor
     * 
     * @param DateTime $read
     * @param DateTime $maturity
     * @param int $number
     * @param int $code
     */
    public function __construct(DateTime $read = null, DateTime $maturity = null, int $number = 0, int $code = 0)
    {
        $this->read     = $read ?? new DateTime();
        $this->maturity = $maturity ?? new DateTime();
        $this->number = $number;
        $this->code = $code;
    }

    /**
     * Get the number
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set the consumer number
     *
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return DateTime
     */
    public function getRead(): DateTime
    {
        return $this->read;
    }

    /**
     * @param DateTime $read
     */
    public function setRead(DateTime $read)
    {
        $this->read = $read;
    }

    /**
     * @return DateTime
     */
    public function getMaturity(): DateTime
    {
        return $this->maturity;
    }

    /**
     * @param DateTime $maturity
     */
    public function setMaturity(DateTime $maturity)
    {
        $this->maturity = $maturity;
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
