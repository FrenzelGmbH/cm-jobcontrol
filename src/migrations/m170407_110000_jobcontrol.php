<?php

/**
 * according to http://quartznet.sourceforge.net/apidoc/2.0/html/
 */

use yii\db\Migration;
use yii\db\Schema;

class m170407_110000_jobcontrol extends Migration
{
    public function up()
    {
        $this->createTable('{{%net_frenzel_jobcontrol}}', [
            'id'                    => Schema::TYPE_PK,
            'name'                  => Schema::TYPE_STRING . ' NOT NULL',
            'jobGroup'              => Schema::TYPE_STRING . ' NOT NULL',
            // job control fields
            'fireInstance'          => Schema::TYPE_INTEGER,
            'fireTime'              => Schema::TYPE_INTEGER . ' NOT NULL',
            'jobDetail'             => Schema::TYPE_TEXT,
            'jobInstance'           => Schema::TYPE_STRING,      
            'jobRunTime'            => Schema::TYPE_TIME,
            'recovering'            => Schema::TYPE_BOOLEAN . ' DEFAULT 0',
            'refireCount'           => Schema::TYPE_INTEGER,
            'result'                => Schema::TYPE_STRING,
            'scheduler'             => Schema::TYPE_STRING,
            'trigger'               => Schema::TYPE_STRING,
            // workflow
            'status'                => Schema::TYPE_STRING . ' DEFAULT NULL',
            // blamable
            'created_by'            => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_by'            => Schema::TYPE_INTEGER . ' NOT NULL',
            // timestamps
            'created_at'            => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at'            => Schema::TYPE_INTEGER . ' NOT NULL',
            'deleted_at'            => Schema::TYPE_INTEGER . ' DEFAULT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%net_frenzel_jobcontrol}}');
    }
}