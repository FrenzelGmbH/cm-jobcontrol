<?php 

namespace net\frenzel\jobcontrol\models\workflow;

use Yii;

/**
 * 
 */
class JobcontrolWorkflow implements \raoul2000\workflow\source\file\IWorkflowDefinitionProvider
{
	pubic function getDefinition(){
		return [
			'initialStatus' => 'init',
			'status' => [
				'finished' => [
					'transition' => [],
				]
			]
		]
	}
}