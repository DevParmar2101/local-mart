<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "store_category".
 *
 * @property int $id
 * @property string|null $category_name
 * @property int|null $user_id
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property UserStore[] $userStores
 */
class StoreCategory extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'status'], 'integer'],
            [['category_name', 'user_id', 'status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'user_id' => 'User ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[UserStores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserStores()
    {
        return $this->hasMany(UserStore::class, ['store_category' => 'id']);
    }
}
