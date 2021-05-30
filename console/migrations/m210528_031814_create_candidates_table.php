<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%candidates}}`.
 */
class m210528_031814_create_candidates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%candidates}}', [
            'id' => $this->primaryKey(),
            'fullname'=>$this->string(),
            'id_groups'=>$this->integer(),
            'id_category'=>$this->integer()
        ]);
        $this->createIndex(
            'idx-candidates-id_groups',
            'candidates',
            'id_groups'
        );
        $this->addForeignKey(
            'fk-candidates-id_groups',
            'candidates',
            'id_groups',
            'groups',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-candidates-id_category',
            'candidates',
            'id_category'
        );
        $this->addForeignKey(
            'fk-candidates-id_category',
            'candidates',
            'id_category',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-candidates-id_groups',
            'candidates'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-candidates-id_groups',
            'candidates'
        );
        $this->dropForeignKey(
            'idx-candidates-id_category',
            'candidates'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'fk-candidates-id_category',
            'candidates'
        );
        $this->dropTable('{{%candidates}}');
    }
}
