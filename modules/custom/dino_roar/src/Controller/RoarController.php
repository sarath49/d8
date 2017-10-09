<?php
/**
 * Created by PhpStorm.
 * User: sarath
 * Date: 10/6/2017
 * Time: 5:30 AM
 */

namespace Drupal\dino_roar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Logger\LoggerChannelFactory;
use Drupal\dino_roar\Jurassic\RoarService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;


class RoarController extends ControllerBase {
  private $roarGenerator;
  private $loggerFact;
  public function roar($count) {
    $keyValueStore = $this->keyValue('dino');
    $roar = $this->roarGenerator->roar($count);
    //$keyValueStore->set('roar_string', $roar);
    //$roar = $keyValueStore->get('roar_string');
    $this->loggerFact->get('default')
      ->debug($roar);

    return new Response($roar);
  }

  public static function create(ContainerInterface $container) {
    $roarGenerator = $container->get('dino_roar.roar_generater');
    $loggerFactory = $container->get('logger.factory');
    return new static($roarGenerator, $loggerFactory);
  }

  public function __construct(RoarService $roarGenerator, LoggerChannelFactory $loggerFactory) {
     $this->roarGenerator = $roarGenerator;
     $this->loggerFact = $loggerFactory;
  }
}