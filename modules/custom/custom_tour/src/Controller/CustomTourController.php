<?php

namespace Drupal\custom_tour\Controller;

use Drupal\examples\Utility\DescriptionTemplateTrait;


/**
 * Controller routine for tour example route.
 * 
 * @ingroup custom_tour
 */
class CustomTourController {
	use DescriptionTemplateTrait;

	/**
	 * {@inheritdoc}
	 */
	protected function getModuleName() {
		return 'custom_tour';
	}
}