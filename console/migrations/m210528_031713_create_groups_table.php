<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%groups}}`.
 */
class m210528_031713_create_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%groups}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'teacher'=> $this->string(),


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%groups}}');
    }
}
