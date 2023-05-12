<?php

namespace Drupal\diegos\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 * Class ControllerBase.
 *
 * @package Drupal\content_api\Controller
 */
class DiegosController extends ControllerBase
{
	
	function intro()
	{
		return [
			'#title' => ' Diegos Page Title',
			'#markup' => 'Diegos Content',
			];
	}
}

?>