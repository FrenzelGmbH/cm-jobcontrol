<?php

namespace namespace net\frenzel\jobcontrol\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Jobcontrol]].
 *
 * @see \app\models\Jobcontrol
 */
class JobcontrolQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Jobcontrol[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Jobcontrol|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
