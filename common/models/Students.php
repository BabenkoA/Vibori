<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string|null $fullname
 * @property string|null $numberstud
 * @property int|null $id_groups
 * @property int|null $kurs
 * @property int|null $id_category
 *
 * @property Category $category
 * @property Groups $groups
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_groups', 'kurs', 'id_category'], 'integer'],
            [['fullname', 'numberstud'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id']],
            [['id_groups'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['id_groups' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'numberstud' => 'Numberstud',
            'id_groups' => 'Id Groups',
            'kurs' => 'Kurs',
            'id_category' => 'Id Category',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }

    /**
     * Gets query for [[Groups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasOne(Groups::className(), ['id' => 'id_groups']);
    }
}
