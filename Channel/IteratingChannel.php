<?php

/*
 * This file is part of the HadesArchitect Notification bundle
 *
 * (c) Aleksandr Volochnev <a.volochnev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HadesArchitect\NotificationBundle\Channel;

use HadesArchitect\NotificationBundle\Notification\NotificationInterface;

class IteratingChannel implements NotificationChannelInterface
{

    /**
     * @var array<NotificationChannelInterface>
     */
    private $channels;

    /**
     * @param array $channels
     */
    public function __construct(array $channels)
    {
        $this->channels = $channels;
    }

    /**
     * @inheritdoc
     */
    public function send(NotificationInterface $notification, $event = null)
    {
        foreach ($this->channels as $channel) {
            if ($channel->supports($notification)) {
                $channel->send($notification, $event);
                return true;
            }
        }
        return false;
    }

    /**
     * @param NotificationInterface $notification
     */
    public function supports(NotificationInterface $notification)
    {

    }
}
