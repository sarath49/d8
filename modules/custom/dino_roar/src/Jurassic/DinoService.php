<?php
/**
 * Created by PhpStorm.
 * User: sarath
 * Date: 10/7/2017
 * Time: 8:37 AM
 */

namespace Drupal\dino_roar\Jurassic;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class DinoService implements EventSubscriberInterface {

  public function onKernalRequest($event) {
    //var_dump($event); die;
  }

  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => 'onKernalRequest',
    ];
  }
}