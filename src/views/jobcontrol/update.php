<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model net\frenzel\jobcontrol\models\Jobcontrol */

$this->title = Yii::t('jobcontrol', 'Update {modelClass}: ', [
    'modelClass' => 'Jobcontrol',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('jobcontrol', 'Jobcontrols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('jobcontrol', 'Update');
?>
<div class="jobcontrol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
