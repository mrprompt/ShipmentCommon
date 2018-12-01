<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * E-mail
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Email
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var boolean
     */
    private $primary;

    /**
     * @param string $address
     * @param bool $primary
     */
    public function __construct(string $address = null, bool $primary = true)
    {
        $this->address = $address;
        $this->primary = $primary;
    }

    /**
     * @return string
     */
    public function getAddress(): string
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
     * @return boolean
     */
    public function isPrimary(): bool
    {
        return $this->primary === true;
    }

    /**
     * @return boolean
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }

    /**
     * @param boolean $primary
     */
    public function setPrimary(bool $primary = true)
    {
        $this->primary = $primary;
    }
}