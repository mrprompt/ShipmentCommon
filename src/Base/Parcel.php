<?php
namespace MrPrompt\ShipmentCommon\Base;

use DateTime;

/**
 * Parcel
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Parcel
{
    /**
     *
     * @var DateTime
     */
    private $maturity;

    /**
     *
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $key;

    /**
     * @var int
     */
    private $quantity;

    /**
     * Constructor
     * 
     * @param DateTime $maturity
     * @param float $price
     * @param int $key
     * @param int $quantity
     */
    public function __construct(
        DateTime $maturity = null,
        float $price = 0.00,
        int $key = 0,
        int $quantity = 1
    ) {
        $this->maturity = $maturity ?? new DateTime();
        $this->price = $price;
        $this->key = $key;
        $this->quantity = $quantity;
    }

    /**
     * @return the $maturity
     */
    public function getMaturity(): DateTime
    {
        return $this->maturity;
    }

    /**
     * @param \DateTime $maturity
     */
    public function setMaturity(DateTime $maturity)
    {
        $this->maturity = $maturity;
    }

    /**
     * @return the $price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getKey(): int
    {
        return $this->key;
    }

    /**
     * @param int $key
     */
    public function setKey(int $key = 0)
    {
        $this->key = (int) $key;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity = 1)
    {
        $this->quantity = $quantity;
    }
}
