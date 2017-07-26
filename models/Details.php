<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "details".
 *
 * @property int $id
 * @property string $for_work
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $guests
 * @property string $smoking
 * @property string $guest_name
 * @property string $special_request
 */
class Details extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['for_work', 'title', 'first_name', 'last_name', 'email', 'password', 'guests', 'smoking', 'guest_name', 'special_request'], 'required'],
            [['for_work', 'title', 'guests', 'smoking', 'special_request'], 'string'],
            [['first_name', 'last_name', 'email', 'password', 'guest_name'], 'string', 'max' => 100],
            ['email','email'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'for_work' => 'For Work',
            'title' => 'Title',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'guests' => 'Guests',
            'smoking' => 'Smoking',
            'guest_name' => 'Guest Name',
            'special_request' => 'Special Request',

        ];
    }
}
