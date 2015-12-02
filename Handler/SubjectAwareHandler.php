<?php

/*
 * This file is part of the HadesArchitect Notification bundle
 *
 * (c) Aleksandr Volochnev <a.volochnev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HadesArchitect\NotificationBundle\Handler;

use HadesArchitect\NotificationBundle\Notification\Notification;
use Symfony\Component\Translation\TranslatorInterface;
use Throwr\CRM\Bundle\CoreBundle\Entity\NotificationAction;

class SubjectAwareHandler extends BaseHandler implements SubjectAwareHandlerInterface, TranslatorAwareHandlerInterface
{
    /**
     * @var string
     */
    protected $subject;

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @inheritdoc
     */
    public function setTranslator(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @inheritdoc
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @inheritdoc
     */
    protected function getNotification($body, NotificationAction $notificationAction)
    {
        $notification = parent::getNotification($body, $notificationAction);

        $notification
            ->setSubject($this->translator->trans($this->subject));

        return $notification;
    }
}
