<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model net\frenzel\jobcontrol\models\Jobcontrol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobcontrol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jobGroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fireInstance')->textInput() ?>

    <?= $form->field($model, 'fireTime')->textInput() ?>

    <?= $form->field($model, 'jobDetail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jobInstance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jobRunTime')->textInput() ?>

    <?= $form->field($model, 'recovering')->textInput() ?>

    <?= $form->field($model, 'refireCount')->textInput() ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scheduler')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trigger')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('jobcontrol', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
