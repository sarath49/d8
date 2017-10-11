<?php

namespace Drupal\custom_fapi\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Implements InputElement form controller.
 */
class InputElement extends FormBase {
  
  /**
   * {@inherdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

  	// Checkboxes.
  	$form['test_taken'] = [
  	  '#type' => 'checkboxes',
  	  '#options' => ['SAT' => t('SAT'), 'ACT' => t('ACT')],
  	  '#title' => $this->t('Test taken'),
  	  '#description' => $this->t('CheckBoxes, #type => checkboxes')
  	];

  	// Color
  	$form['color'] = [
  	  '#type' => 'color',
  	  '#title' => $this->t('Color'),
  	  '#default_value' => '#fafafa',
  	];

  	// Date
  	$form['date'] = [
  	 '#type' => 'date',
  	 '#title' => $this->t('Date'),
  	 '#default_value' => ['year' => 2020, 'month' => 8, 'day' => 12],
  	];

  	//Email
  	$form['email'] = [
  	  '#type' => 'email',
  	  '#title' => $this->t('Email'),
  	];

  	// Number
  	$form['quantity'] = [
  	  '#type' => 'number',
  	  '#title' => $this->t('Quantity'),
  	  '#default_value' => -100,
  	];

  	// Password.
  	$form['password'] = [
  	  '#type' => 'password',
  	  '#title' => $this->t('Password'),
  	];

  	// Password Confirm.
  	$form['pass_confirm'] = [
  	  '#type' => 'password_confirm',
  	  '#title' => $this->t('Password Confirm'),
  	];

  	$form['range'] = [
  	  '#type' => 'range',
  	  '#title' => $this->t('Range'),
  	  '#min' => 5,
  	  '#max' => 50,
  	];

  	$form['settings']['active'] = [
  		'#type' => 'radios',
  		'#title' => $this->t('Poll Status'),
  		'#options' => ['Active' => $this->t('Active'), 'Blocked' => $this->t('Blocked')],
  	];

  	$form['search'] = [
  	  '#type' => 'search',
  	  '#title' => $this->t('Search'),
  	];

  	$form['select'] = [
  	  '#type' => 'select',
  	  '#title' => $this->t('Select Color'),
  	  '#options' => [
  	  	'Blue' => 'Blue',
  	  	'Green' => 'Green',
  	  	'White' => 'White',
  	  ],
  	  '#empty_option' => $this->t('-Select-'),
  	];


  	return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
  	return 'custom_fapi_input_element';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }
}