<?php

namespace ppadevs\Ddd\Domain\Event;

use ppadevs\Ddd\Domain\DomainEvent;

class StoredEvent implements DomainEvent
{
    /**
     * @var int
     */
    private $eventId;

    /**
     * @var string
     */
    private $eventBody;

    /**
     * @var \DateTime
     */
    private $occurredOn;

    /**
     * @var string
     */
    private $typeName;

    /**
     * @param string $aTypeName
     * @param \DateTime $anOccurredOn
     * @param string $anEventBody
     */
    public function __construct($aTypeName, \DateTime $anOccurredOn, $anEventBody)
    {
        $this->eventBody = $anEventBody;
        $this->typeName = $aTypeName;
        $this->occurredOn = $anOccurredOn;
    }

    /**
     * @return string
     */
    public function eventBody()
    {
        return $this->eventBody;
    }

    /**
     * @return int
     */
    public function eventId()
    {
        return $this->eventId;
    }

    /**
     * @return string
     */
    public function typeName()
    {
        return $this->typeName;
    }

    public function occurredOn()
    {
        return $this->occurredOn;
    }
}
