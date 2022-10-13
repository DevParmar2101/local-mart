<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "store_sub_category".
 *
 * @property int $id
 * @property int|null $category_name
 * @property string|null $sub_category
 * @property int|null $user_id
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property UserStore[] $userStores
 */
class StoreSubCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'store_sub_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name', 'user_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['sub_category'], 'string', 'max' => 255],
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
            'sub_category' => 'Sub Category',
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
