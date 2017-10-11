<?php

namespace Drupal\custom_block\Controller;

use Drupal\examples\Utility\DescriptionTemplateTrait;

class CustomBlockController {
	use DescriptionTemplateTrait;

	/**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'custom_block';
  }
}