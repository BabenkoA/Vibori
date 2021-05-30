<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m210528_031741_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students}}', [
            'id' => $this->primaryKey(),
            'fullname'=> $this->string(),
            'numberstud'=> $this->string(),
            'id_groups'=> $this->integer(),
            'kurs'=> $this->integer(),
            'id_category'=>$this->integer()
        ]);
        $this->createIndex(
            'idx-students-id_groups',
            'students',
            'id_groups'
        );
        $this->addForeignKey(
            'fk-students-id_groups',
            'students',
            'id_groups',
            'groups',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-students-id_category',
            'students',
            'id_category'
        );
        $this->addForeignKey(
            'fk-students-id_category',
            'students',
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
            'fk-students-id_groups',
            'students'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-students-id_groups',
            'students'
        );
        $this->dropForeignKey(
            'idx-students-id_category',
            'students'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'fk-students-id_category',
            'students'
        );
        $this->dropTable('{{%students}}');
    }
}
