<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model net\frenzel\jobcontrol\models\Jobcontrol */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('jobcontrol', 'Jobcontrols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobcontrol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('jobcontrol', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('jobcontrol', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('jobcontrol', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'jobGroup',
            'fireInstance',
            'fireTime:datetime',
            'jobDetail:ntext',
            'jobInstance',
            'jobRunTime',
            'recovering',
            'refireCount',
            'result',
            'scheduler',
            'trigger',
            'status',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
