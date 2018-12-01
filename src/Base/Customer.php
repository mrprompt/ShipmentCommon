<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Customer extends Person
{
    /**
     * @var int
     */
    private $code;

    /**
     * @var int
     */
    private $identityNumber;

    /**
     * @var bool
     */
    private $helpfulMaturity;

    /**
     * @var int
     */
    private $workingDays;

    /**
     * Constructor
     * 
     * @param int $code
     * @param int $identityNumber
     * @param bool $helpfulMaturity
     * @param int $workingDays
     */
    public function __construct(
        int $code = 0,
        int $identityNumber = 0,
        bool $helpfulMaturity = false,
        int $workingDays = 0
    ) {
        $this->code = $code;
        $this->identityNumber = $identityNumber;
        $this->helpfulMaturity = $helpfulMaturity;
        $this->workingDays = $workingDays;
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

    /**
     * @return int
     */
    public function getIdentityNumber(): int
    {
        return $this->identityNumber;
    }

    /**
     * @param int $identityNumber
     */
    public function setIdentityNumber(int $identityNumber)
    {
        $this->identityNumber = $identityNumber;
    }

    /**
     * @return mixed
     */
    public function getHelpfulMaturity(): bool
    {
        return $this->helpfulMaturity;
    }

    /**
     * @param boolean $helpfulMaturity
     */
    public function setHelpfulMaturity(bool $helpfulMaturity = true)
    {
        $this->helpfulMaturity = $helpfulMaturity;
    }

    /**
     * @return int
     */
    public function getWorkingDays(): int
    {
        return $this->workingDays;
    }

    /**
     * @param int $workingDays
     */
    public function setWorkingDays(int $workingDays)
    {
        $this->workingDays = $workingDays;
    }
}
