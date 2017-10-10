<?php

namespace Drupal\custom_fapi\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implementes SimpleForm form controller.
 * 
 * @see \Drupal\Core\Form\FormBase
 */
class SimpleForm extends FormBase {
	/**
	 * Build the simple form.
	 * 
	 * @param array $form
	 *   Default form array structure.
	 * @param \Drupal\Core\Form\FormStateInterface $form_state
	 *	
	 * @return array
	 *   The render array defining the elements of the form.
	 */
	public function buildForm(array $form,FormStateInterface $form_state) {
		$form['title'] = [
		  '#type' => 'textfield',
		  '#title' => $this->t('Title'),
		  '#description' => $this->t('This must be 5 characters in length'),
		  '#required' => TRUE
		];

		$form['actions'] = [
          '#type' => 'actions',
		];

		$form['actions']['submit'] = [
		  '#type' => 'submit',
		  '#value' => $this->t('Enter'),
		];

		return $form;
	}

	/**
	 * Getter method for Form ID.
	 * 
	 * @return
	 *   The unique ID of the form defined by this class. 
	 */
	public function getFormId() {
		return 'csutom_fapi_simple_form';
	}

	/**
	 * Implements form validation.
	 *
	 * @param array $form
	 *   The render array of the currently built form.
	 * @param \Drupal\Core\Form\FormStateInterface
	 *   Object describing the current state of the form. 
	 */
	public function validateForm(array &$form, FormStateInterface $form_state) {
		$title = $form_state->getValue('title');
		if(strlen($title) < 5) {
			$form_state->setErrorByName('title', $this->t('Title must be 5 characters long'));
		}
	}

	/**
	 * Implements a form submit handler.
	 * 
	 * @param array $form
	 *  The render array of the currently built form.
	 * @param \Drupal\Core\Form\FormStateInterface
	 *  Object describing the current state of the form.
	 */
	public function submitForm(array &$form, FormStateInterface $form_state) {
		$title = $form_state->getValue('title');
		drupal_set_message(t('You specified a title of %title.', ['%title' => $title]));
	}

}