<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @Block(
 *   id = "custom_block_configure",
 *   admin_label = @Translation("Custom: Configure Block")
 * )
 */
class CustomConfigureBlock extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {
		return ['#markup' => $this->configuration['custom_block_string'],];
	}

	/**
	 * {@inheritdoc}
	 */
	public function defaultConfiguration() {
		return [
		  'custom_block_string' => $this->t('A default value. This block was created at %time', ['%time' => date('c')]),
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function blockForm($form, FormStateInterface $form_state) {
		$form['custom_block_configure_form'] = [
		  '#type' => 'textfield',
		  '#title' => $this->t('Block Content'),
		  '#default_value' => $this->configuration['custom_block_string'],
		];
		return $form;
	}

	/**
	 * {@inheritdoc}
	 */
	public function blockSubmit($form, FormStateInterface $form_state) {
		$this->configuration['custom_block_string'] = $form_state->getValue('custom_block_configure_form');
	}
}