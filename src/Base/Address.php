<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Address
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Address
{
    /**
     * City
     *
     * @var string
     */
    private $city;

    /**
     * State
     *
     * @var string
     */
    private $state;

    /**
     * Postal Code - CEP
     *
     * @var string
     */
    private $postalCode;

    /**
     * Address
     *
     * @var string
     */
    private $address;

    /**
     * Address Number
     *
     * @var int
     */
    private $number;

    /**
     * District
     *
     * @var string
     */
    private $district;

    /**
     * Complement
     *
     * @var string
     */
    private $complement;

    /**
     * Return the city
     * 
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the city
     * 
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Get the state
     * 
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Set the state
     * 
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }

    /**
     * Get the postal code
     * 
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Set the postal code
     * 
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return the $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
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
     * @return the $district
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @param string $district
     */
    public function setDistrict(string $district)
    {
        $this->district = $district;
    }

    /**
     * @return the $complement
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * @param string $complement
     */
    public function setComplement(string $complement)
    {
        $this->complement = $complement;
    }
}
