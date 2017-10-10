<?php

namespace Drupal\custom_fapi\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;

class Page extends ControllerBase {

	public function description() {

		$content['intro'] = [
		'#markup' => '<p>' . $this->t('Form API') . '</p>',
		];

		$content['links'] = [
          '#theme' => 'item_list',
          '#items' => [
             Link::createFromRoute($this->t('Simple Form'), 'custom_fapi.simple_form'),
             Link::createFromRoute($this->t('Input Elements'), 'custom_fapi.input_element'),
          ],
		];

		return $content;
	}
}