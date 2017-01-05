<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 04.01.17
 * Time: 16:54
 */

namespace AppBundle\Notification;


interface NotificationHandler
{
    public function send();
}