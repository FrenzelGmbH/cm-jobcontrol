<?php

namespace namespace net\frenzel\jobcontrol\models;

use Yii;

/**
 * This is the model class for table "{{%net_frenzel_jobcontrol}}".
 *
 * @property int $id
 * @property string $name
 * @property string $jobGroup
 * @property int $fireInstance
 * @property int $fireTime
 * @property string $jobDetail
 * @property string $jobInstance
 * @property string $jobRunTime
 * @property int $recovering
 * @property int $refireCount
 * @property string $result
 * @property string $scheduler
 * @property string $trigger
 * @property string $status
 * @property int $created_by
 * @property int $updated_by
 * @property int $created_at
 * @property int $updated_at
 * @property int $deleted_at
 */
class Jobcontrol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%net_frenzel_jobcontrol}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'jobGroup', 'fireTime', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['fireInstance', 'fireTime', 'recovering', 'refireCount', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['jobDetail'], 'string'],
            [['jobRunTime'], 'safe'],
            [['name', 'jobGroup', 'jobInstance', 'result', 'scheduler', 'trigger', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('jobcontrol', 'ID'),
            'name' => Yii::t('jobcontrol', 'Name'),
            'jobGroup' => Yii::t('jobcontrol', 'Job Group'),
            'fireInstance' => Yii::t('jobcontrol', 'Fire Instance'),
            'fireTime' => Yii::t('jobcontrol', 'Fire Time'),
            'jobDetail' => Yii::t('jobcontrol', 'Job Detail'),
            'jobInstance' => Yii::t('jobcontrol', 'Job Instance'),
            'jobRunTime' => Yii::t('jobcontrol', 'Job Run Time'),
            'recovering' => Yii::t('jobcontrol', 'Recovering'),
            'refireCount' => Yii::t('jobcontrol', 'Refire Count'),
            'result' => Yii::t('jobcontrol', 'Result'),
            'scheduler' => Yii::t('jobcontrol', 'Scheduler'),
            'trigger' => Yii::t('jobcontrol', 'Trigger'),
            'status' => Yii::t('jobcontrol', 'Status'),
            'created_by' => Yii::t('jobcontrol', 'Created By'),
            'updated_by' => Yii::t('jobcontrol', 'Updated By'),
            'created_at' => Yii::t('jobcontrol', 'Created At'),
            'updated_at' => Yii::t('jobcontrol', 'Updated At'),
            'deleted_at' => Yii::t('jobcontrol', 'Deleted At'),
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\query\JobcontrolQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \net\frenzel\jobcontrol\models\query\JobcontrolQuery(get_called_class());
    }
}
