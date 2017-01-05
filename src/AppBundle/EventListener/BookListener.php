<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 05.01.17
 * Time: 10:32
 */

namespace AppBundle\EventListener;


use AppBundle\Entity\Book;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class BookListener
{
    private $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
            $this->eventDispatcher = $eventDispatcher;
    }

    public function postPersist(LifecycleEventArgs $args){
        $entity = $args->getEntity();

        if (!$entity instanceof Book){
            return;
        }

        $this->eventDispatcher->dispatch('book.new');
    }

}