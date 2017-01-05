<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 04.01.17
 * Time: 16:55
 */

namespace AppBundle\Notification\Handler;


use AppBundle\Notification\NotificationHandler;

class NotificationHandlerB implements NotificationHandler
{
    public function send()
    {
        file_put_contents('/tmp/b.log',date('r')." order\n",FILE_APPEND);
    }
}