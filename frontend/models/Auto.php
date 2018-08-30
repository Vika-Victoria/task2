<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "auto".
 *
 * @property int $id
 * @property string $mark
 * @property string $color
 * @property int $registration_number
 * @property int $user_id
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mark', 'color', 'registration_number', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['mark', 'color'], 'string', 'max' => 50],
//            [['registration_number'],'match', 'pattern' => '/[а-яА-Я0-9]{8}/'],
            [['registration_number'], 'unique'],
            [['registration_number'],'number', 'min' =>8 ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mark' => 'Mark',
            'color' => 'Color',
            'registration_number' => 'Registration Number',
            'user_id' => 'User ID',
        ];
    }

    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

}