<?php
namespace ppadevs\Ddd\Application\Notification;

interface MessageProducer
{
    public function open($exchangeName);

    /**
     * @param $exchangeName
     * @param string $notificationMessage
     * @param string $notificationType
     * @param int $notificationId
     * @param \DateTime $notificationOccurredOn
     */
    public function send($exchangeName, $notificationMessage, $notificationType, $notificationId, \DateTime $notificationOccurredOn);

    public function close($exchangeName);
}
