<?php
/**
 * Created by PhpStorm.
 * User: sarath
 * Date: 10/6/2017
 * Time: 6:38 AM
 */

namespace Drupal\dino_roar\Jurassic;

use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;

class RoarService {

  /**
   * @var \Drupal\Core\KeyValueStore\KeyValueFactoryInterface
   */
  private $keyValueFactory;

  private $useCache;

  public function __construct(KeyValueFactoryInterface $keyValueFactory, $useCache) {
    $this->keyValueFactory = $keyValueFactory;
    $this->useCache = $useCache;
  }

  public function roar($count) {
    $key = 'roar_' . $count;
    $store = $this->keyValueFactory->get('dino');
    if ($this->useCache && $store->has($key)) {
      return $store->get($key);
    }
    sleep(2);

    $string = 'R'.str_repeat('O', $count) . 'AR';
    if ($this->useCache) {
      $store->set($key, $string);
    }
    return $string;
  }
}