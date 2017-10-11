<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Custom Uppercase Block.
 *
 * @Block(
 *   id = "custom_block_uppercase",
 *   admin_label = @Translation("Custom: Uppercase Block")
 *)
 */
class CustomUppercaseBlock extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {
	  return [
        '#markup' => t("This block's title is changed to uppercase. Any block title which contains 'uppercase' will also be changed to uppercase."),
      ];
	}
}