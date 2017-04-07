<?php

/**
 * @company Frenzel GmbH
 * @author Philipp Frenzel  
 * @license MIT
 * @version 0.1
 */

namespace net\frenzel\jobcontrol;

use Yii;
use yii\base\Action;
use yii\web\ForbiddenHttpException;

class Module extends \yii\base\Module
{
	/**
	 * @inerhitdoc
	 */
	public $controllerNamespace = 'net\frenzel\jobcontrol\controllers';

	/**
	 * [init description]
	 * @return [type] [description]
	 */
	public function init()
	{
		parent::init();
	}
}