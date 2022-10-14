<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Settings;

/**
 * SettingsSearch represents the model behind the search form of `common\models\Settings`.
 */
class SettingsSearch extends Settings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['app_name', 'email_host', 'email_username', 'email_password', 'email_port', 'email_encryption', 'twilio_account_sid', 'twilio_auth_token', 'twilio_service_sid', 'twilio_phone_number', 'logo_dark', 'logo_light', 'logo_transparent', 'favicon'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Settings::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'app_name', $this->app_name])
            ->andFilterWhere(['like', 'email_host', $this->email_host])
            ->andFilterWhere(['like', 'email_username', $this->email_username])
            ->andFilterWhere(['like', 'email_password', $this->email_password])
            ->andFilterWhere(['like', 'email_port', $this->email_port])
            ->andFilterWhere(['like', 'email_encryption', $this->email_encryption])
            ->andFilterWhere(['like', 'twilio_account_sid', $this->twilio_account_sid])
            ->andFilterWhere(['like', 'twilio_auth_token', $this->twilio_auth_token])
            ->andFilterWhere(['like', 'twilio_service_sid', $this->twilio_service_sid])
            ->andFilterWhere(['like', 'twilio_phone_number', $this->twilio_phone_number])
            ->andFilterWhere(['like', 'logo_dark', $this->logo_dark])
            ->andFilterWhere(['like', 'logo_light', $this->logo_light])
            ->andFilterWhere(['like', 'logo_transparent', $this->logo_transparent])
            ->andFilterWhere(['like', 'favicon', $this->favicon]);

        return $dataProvider;
    }
}
