<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model net\frenzel\jobcontrol\models\Jobcontrol */

$this->title = Yii::t('jobcontrol', 'Create Jobcontrol');
$this->params['breadcrumbs'][] = ['label' => Yii::t('jobcontrol', 'Jobcontrols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
