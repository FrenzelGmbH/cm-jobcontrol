<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JobcontrolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcontrol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'jobGroup') ?>

    <?= $form->field($model, 'fireInstance') ?>

    <?= $form->field($model, 'fireTime') ?>

    <?php // echo $form->field($model, 'jobDetail') ?>

    <?php // echo $form->field($model, 'jobInstance') ?>

    <?php // echo $form->field($model, 'jobRunTime') ?>

    <?php // echo $form->field($model, 'recovering') ?>

    <?php // echo $form->field($model, 'refireCount') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'scheduler') ?>

    <?php // echo $form->field($model, 'trigger') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('jobcontrol', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('jobcontrol', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
