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
    private $fantasyName;

    /**
     * Social Reason
     *
     * @var string
     */
    private $socialReason;

    /**
     * State Registration
     *
     * @var string
     */
    private $stateRegistration;

    /**
     * Constructor
     * 
     * @param string $fantasyName
     * @param string $socialReason
     * @param string $stateRegistration
     */
    public function __construct(
        string $fantasyName = '',
        string $socialReason = '',
        string $stateRegistration = ''
    ) {
        $this->fantasyName = $fantasyName;
        $this->socialReason = $socialReason;
        $this->stateRegistration = $stateRegistration;
    }

    /**
     * @return string
     */
    public function getStateRegistration(): string
    {
        return $this->stateRegistration;
    }

    /**
     * @param string $stateRegistration
     */
    public function setStateRegistration(string $stateRegistration)
    {
        $this->stateRegistration = $stateRegistration;
    }

    /**
     * @return the $fantasyName
     */
    public function getFantasyName(): string
    {
        return $this->fantasyName;
    }

    /**
     * @param mixed $fantasyName
     */
    public function setFantasyName(string $fantasyName)
    {
        $this->fantasyName = $fantasyName;
    }

    /**
     * @return the $socialReason
     */
    public function getSocialReason(): string
    {
        return $this->socialReason;
    }

    /**
     * @param mixed $socialReason
     */
    public function setSocialReason(string $socialReason)
    {
        $this->socialReason = $socialReason;
    }
}
