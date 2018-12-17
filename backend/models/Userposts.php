<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property string $name
 * @property string $sname
 * @property string $email
 * @property string $phone
 * @property string $textarea
 * @property int $text_id
 * @property string $user
 */
class Userposts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sname', 'email', 'phone', 'textarea', 'user'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'sname' => 'Sname',
            'email' => 'Email',
            'phone' => 'Phone',
            'textarea' => 'Textarea',
            'text_id' => 'Text ID',
            'user' => 'User',
        ];
    }
}
