<?php
namespace MrPrompt\ShipmentCommon\Base;

/**
 * Purchaser
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Purchaser extends Person
{
    /**
     * Fantasy name
     *
     * @var string
     */
    private $purchaserFantasyName;

    /**
     * Social Reason
     *
     * @var string
     */
    private $purchaserSocialReason;

    /**
     * State Registration
     *
     * @var string
     */
    private $purchaserStateRegistration;

    /**
     * @return string
     */
    public function getPurchaserStateRegistration(): string
    {
        return $this->purchaserStateRegistration;
    }

    /**
     * @param string $purchaserStateRegistration
     */
    public function setPurchaserStateRegistration(string $purchaserStateRegistration)
    {
        $this->purchaserStateRegistration = $purchaserStateRegistration;
    }

    /**
     * @return the $purchaserFantasyName
     */
    public function getPurchaserFantasyName(): string
    {
        return $this->purchaserFantasyName;
    }

    /**
     * @param mixed $purchaserFantasyName
     */
    public function setPurchaserFantasyName(string $purchaserFantasyName)
    {
        $this->purchaserFantasyName = $purchaserFantasyName;
    }

    /**
     * @return the $purchaserSocialReason
     */
    public function getPurchaserSocialReason(): string
    {
        return $this->purchaserSocialReason;
    }

    /**
     * @param mixed $purchaserSocialReason
     */
    public function setPurchaserSocialReason(string $purchaserSocialReason)
    {
        $this->purchaserSocialReason = $purchaserSocialReason;
    }
}
