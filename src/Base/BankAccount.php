<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Bank Account
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class BankAccount
{
    /**
     * @var int
     */
    private $account;

    /**
     * @var int
     */
    private $digit;

    /**
     * @var int
     */
    private $operation;

    /**
     * @var bool
     */
    private $security = false;

    /**
     * @var Bank
     */
    private $bank;

    /**
     * @var Holder
     */
    private $holder;

    /**
     * @param Bank $bank
     * @param Holder $holder
     */
    public function __construct(Bank $bank, Holder $holder)
    {
        $this->bank     = $bank;
        $this->holder   = $holder;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->account;
    }

    /**
     * @param  int $account
     */
    public function setNumber(int $account)
    {
        $this->account = $account;
    }

    /**
     * @return int
     */
    public function getDigit(): int
    {
        return $this->digit;
    }

    /**
     * @param  int $digit
     */
    public function setDigit(int $digit)
    {
        $this->digit = $digit;
    }

    /**
     * @return int
     */
    public function getOperation(): int
    {
        return $this->operation;
    }

    /**
     * @param  string $operation
     */
    public function setOperation(int $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return bool
     */
    public function getSecurity(): bool
    {
        return $this->security;
    }

    /**
     * @param  bool $security
     */
    public function setSecurity(bool $security = false)
    {
        $this->security = $security;
    }

    /**
     * @return Bank
     */
    public function getBank(): Bank
    {
        return $this->bank;
    }

    /**
     * @param Bank $bank
     */
    public function setBank(Bank $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return Holder
     */
    public function getHolder(): Holder
    {
        return $this->holder;
    }

    /**
     * @param Holder $holder
     */
    public function setHolder(Holder $holder)
    {
        $this->holder = $holder;
    }
}
