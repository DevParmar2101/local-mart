<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "states".
 *
 * @property int $id
 * @property string|null $name
 * @property int $status
 *
 * @property Cities[] $cities
 */
class States extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'states';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
            [['status'], 'integer'],
            ['status' => 'safe'],
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
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(Cities::class, ['state_id' => 'id']);
    }
}
