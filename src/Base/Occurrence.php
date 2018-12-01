<?php
namespace MrPrompt\ShipmentCommon\Base;

use DateTime;

/**
 * Occurrence
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Occurrence
{
    /**
     * Insert ocurrence
     *
     * @const string
     */
    const INSERT = 'I';

    /**
     * Cancel occurrence
     *
     * @const string
     */
    const CANCEL = 'C';

    /**
     * Update occurrence
     *
     * @const string
     */
    const UPDATE = 'A';

    /**
     * Occurrence type
     *
     * @var string
     */
    private $type = self::INSERT;

    /**
     * Occurrence Return Code
     *
     * @var int
     */
    private $return;

    /**
     * Occurrence Description
     *
     * @var string
     */
    private $description;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getReturn(): int
    {
        return $this->return;
    }

    /**
     * @param int $return
     */
    public function setReturn(int $return = 0)
    {
        $this->return = $return;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = '')
    {
        $this->description = $description;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }
}
