<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 05.01.17
 * Time: 09:38
 */

namespace AppBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CompilerPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        if (!$container->has('order_notification')){
            return;
        }

        $definition = $container->findDefinition('order_notification');

        $taggedServices = $container->findTaggedServiceIds('notification_handler');

        foreach ($taggedServices as $id => $service){
            $definition->addMethodCall('addHandler',[new Reference($id)]);
        }
    }
}