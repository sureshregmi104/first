<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservations;

/**
 * ReservationsSearch represents the model behind the search form of `app\models\Reservations`.
 */
class ReservationsSearch extends Reservations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reservation_id', 'telephone_number'], 'integer'],
            [['country', 'notification', 'card_number', 'expiry_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reservations::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'reservation_id' => $this->reservation_id,
            'telephone_number' => $this->telephone_number,
            'expiry_date' => $this->expiry_date,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'notification', $this->notification])
            ->andFilterWhere(['like', 'card_number', $this->card_number]);

        return $dataProvider;
    }
}
