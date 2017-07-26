<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservations".
 *
 * @property int $reservation_id
 * @property string $country
 * @property int $telephone_number
 * @property string $notification
 * @property string $card_number
 * @property string $expiry_date
 */
class Reservations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'telephone_number', 'notification', 'card_number', 'expiry_date'], 'required'],
            [['telephone_number'], 'integer'],
            [['notification'], 'string'],
            [['expiry_date'], 'safe'],
            [['country', 'card_number'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reservation_id' => 'Reservation ID',
            'country' => 'Country',
            'telephone_number' => 'Telephone Number',
            'notification' => 'Notification',
            'card_number' => 'Card Number',
            'expiry_date' => 'Expiry Date',
        ];
    }
}
