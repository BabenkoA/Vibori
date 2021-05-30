<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $teacher
 *
 * @property Candidates[] $candidates
 * @property Students[] $students
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'teacher'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'teacher' => 'Teacher',
        ];
    }

    /**
     * Gets query for [[Candidates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidates()
    {
        return $this->hasMany(Candidates::className(), ['id_groups' => 'id']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['id_groups' => 'id']);
    }
}
