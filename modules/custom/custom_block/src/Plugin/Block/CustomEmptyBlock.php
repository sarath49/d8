<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provide a Custom Empty block.
 *
 * @Block(
 *   id = "custom_empty_block",
 *   admin_label = @Translation("Custom: Empty Block") 
 *)
 */
class CustomEmptyBlock extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {
		return [];
	}
}