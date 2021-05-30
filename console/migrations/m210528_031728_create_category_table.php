<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210528_031728_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'category'=>$this->string(),
            'code'=>$this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
