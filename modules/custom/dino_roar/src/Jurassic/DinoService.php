<?php
/**
 * Created by PhpStorm.
 * User: sarath
 * Date: 10/7/2017
 * Time: 8:37 AM
 */

namespace Drupal\dino_roar\Jurassic;

use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class DinoService implements EventSubscriberInterface {

    /**
     * @var LoggerChannelFactoryInterface
     */
    private $loggerFact;

    public function __construct(LoggerChannelFactoryInterface $loggerFact) {
        $this->loggerFact = $loggerFact;
    }

    public function onKernalRequest(GetResponseEvent $event) {
      $request = $event->getRequest();
      $shouldRoar = $request->query->get('roar');
    if ($shouldRoar) {
      $this->loggerFact->get('default')->debug('ROOOOAR');
    }
  }

  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => 'onKernalRequest',
    ];
  }
}