<?php

/*
 * This file is part of the HadesArchitect Notification bundle
 *
 * (c) Aleksandr Volochnev <a.volochnev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HadesArchitect\NotificationBundle\Notification;

class Notification implements NotificationInterface
{
    /**
     * @var string
     */
    protected $receiver;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var integer
     */
    protected $type;


    /**
     * @inheritdoc
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @inheritdoc
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @inheritdoc
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @inheritdoc
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @inheritdoc
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}
