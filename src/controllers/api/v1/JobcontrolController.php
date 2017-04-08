<?php

namespace net\frenzel\jobcontrol\controllers\api\v1;

use Yii;
use net\frenzel\jobcontrol\models\Jobcontrol;
use net\frenzel\jobcontrol\models\JobcontrolSearch;
use yii\yii\helpers\ArrayHelper;
use yii\filters\ContentNegotiator;

/**
 * 
 */
class JobcontrolController extends \yii\rest\Controller
{
    public $serializer = 'tuyakhov\jsonapi\Serializer';

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/vnd.api+json' => Response::FORMAT_JSON,
                ],
            ]
        ]);
    }
}