<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "voting".
 *
 * @property int $id
 * @property string|null $candidate
 * @property int|null $studnumber
 * @property string|null $group
 * @property string|null $why
 */
class Voting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'voting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studnumber'], 'integer'],
            [['why'], 'string'],
            [['candidate', 'group'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'candidate' => 'Candidate',
            'studnumber' => 'Studnumber',
            'group' => 'Group',
            'why' => 'Why',
        ];
    }
}
