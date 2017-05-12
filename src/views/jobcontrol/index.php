<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\JobcontrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('jobcontrol', 'Jobcontrols');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
<div class="jobcontrol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('jobcontrol', 'Create Jobcontrol'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'jobGroup',
            'fireInstance',
            'fireTime:datetime',
            // 'jobDetail:ntext',
            // 'jobInstance',
            // 'jobRunTime',
            // 'recovering',
            // 'refireCount',
            'result',
            // 'scheduler',
            // 'trigger',
            'status',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
</div>
