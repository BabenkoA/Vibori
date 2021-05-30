<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%voting}}`.
 */
class m210528_032621_create_voting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%voting}}', [
            'id' => $this->primaryKey(),
            'candidate'=>$this->string(),
            'studnumber'=>$this->integer(),
            'group'=>$this->string(),
            'why'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%voting}}');
    }
}
