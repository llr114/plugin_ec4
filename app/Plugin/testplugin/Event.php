<?php

namespace Plugin\testplugin;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Event implements EventSubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
        	'test_plugin.twig' => 'onDetailTwig',
        ];
    }

    public function onDetailTwig(TemplateEvent $event)
    {
    	$event->setParameter('name', '球部太郎');
    }
}
