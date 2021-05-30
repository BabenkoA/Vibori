<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $category
 * @property string|null $code
 *
 * @property Candidates[] $candidates
 * @property Students[] $students
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'code' => 'Code',
        ];
    }

    /**
     * Gets query for [[Candidates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidates()
    {
        return $this->hasMany(Candidates::className(), ['id_category' => 'id']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['id_category' => 'id']);
    }
}
