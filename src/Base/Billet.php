<?php
namespace MrPrompt\ShipmentCommon\Base;

use ArrayObject;
use stdClass;

/**
 * Credit card
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Billet
{
    /**
     * @var ArrayObject
     */
    private $details;

    /**
     * @var BankAccount
     */
    private $bankAccount;

    /**
     * @var Seller
     */
    private $assignor;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var int
     */
    private $number;

    /**
     * Constructor
     */
    public function __construct(
        BankAccount $bankAccount = null,
        Seller $assignor = null,
        ArrayObject $details = null,
        float $rate = 0.00,
        int $number = 0
    ) {
        $this->bankAccount = $bankAccount ?? new BankAccount();
        $this->assignor = $assignor ?? new Seller();
        $this->details = $details ?? new ArrayObject();
        $this->rate = $rate;
        $this->number = $number;
    }

    /**
     * @return ArrayObject
     */
    public function getDetails(): ArrayObject
    {
        return $this->details;
    }

    /**
     * @param ArrayObject $details
     */
    public function setDetails(ArrayObject $details)
    {
        $this->details = $details;
    }

    /**
     * @param object $detail
     */
    public function addDetail(stdClass $detail)
    {
        $this->details->append($detail);
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate(float $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     */
    public function setBankAccount(BankAccount $bankAccount)
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return Seller
     */
    public function getAssignor(): Seller
    {
        return $this->assignor;
    }

    /**
     * @param Seller $assignor
     */
    public function setAssignor(Seller $assignor)
    {
        $this->assignor = $assignor;
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
}
