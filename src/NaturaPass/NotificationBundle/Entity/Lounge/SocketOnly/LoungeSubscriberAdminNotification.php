<?php

/**
 * Created by PhpStorm.
 * User: vincentvalot
 * Date: 09/07/15
 * Time: 15:02
 */

namespace NaturaPass\NotificationBundle\Entity\Lounge\SocketOnly;

use Api\ApiBundle\Controller\v1\ApiRestController;
use NaturaPass\LoungeBundle\Entity\Lounge;
use NaturaPass\LoungeBundle\Entity\LoungeUser;
use NaturaPass\NotificationBundle\Entity\AbstractNotification;
use Doctrine\ORM\Mapping as ORM;
use NaturaPass\NotificationBundle\Entity\SocketPoolNotification;

/**
 * Class LoungeSubscriberAdminNotification
 * @package NaturaPass\NotificationBundle\Entity\Lounge\SocketOnly
 */
class LoungeSubscriberAdminNotification extends AbstractNotification implements SocketPoolNotification {

    const TYPE = 'lounge.user_admin';

    private $lounge;
    private $subscriber;

    public function __construct(Lounge $lounge, LoungeUser $subscriber) {
        parent::__construct(array(
            'route' => 'naturapass_lounge_show',
            'type' => 'lounge.user_admin',
            'persistable' => false,
            'socket' => array(
                'enabled' => true,
                'event_name' => 'api-lounge:user-admin'
            ),
            'push' => array(
                'enabled' => false
            )
        ));

        $this->lounge = $lounge;
        $this->subscriber = $subscriber;

        $this->objectID = $this->lounge->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getPoolName() {
        return $this->lounge->getLoungetag();
    }

    /**
     * {@inheritdoc}
     */
    public function getSocketData() {
        return ApiRestController::getFormatLoungeSubscriber($this->subscriber);
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkData() {
        return array(
            'lounge' => $this->lounge->getId(),
            'loungetag' => $this->lounge->getLoungetag()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getContentData() {
        return array(
            '%sender%' => $this->sender->getFullName()
        );
    }

}
