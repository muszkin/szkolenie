<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 04.01.17
 * Time: 16:38
 */

namespace AppBundle\Notification;

class OrderNotification
{

    private $handlers = [];

    public function addHandler(NotificationHandler $handler){
        $this->handlers[] = $handler;
    }

    public function send(){
        foreach ($this->handlers as $handler){
            $handler->send();
        }
    }
}