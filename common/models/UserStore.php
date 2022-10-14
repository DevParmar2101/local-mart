<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_store".
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $contact_number
 * @property int|null $is_number_verified
 * @property int|null $user_id
 * @property string|null $store_name
 * @property int|null $state
 * @property int|null $city
 * @property string|null $address
 * @property int|null $zip_code
 * @property int|null $status
 * @property int|null $store_category
 * @property int|null $purchase_type
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property StoreCategory $storeCategory
 * @property User $user
 */
class UserStore extends BaseActiveRecord
{
    public $category;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'contact_number', 'store_name', 'state', 'city', 'address', 'zip_code', 'category'], 'required'],
            [['is_number_verified', 'user_id', 'state', 'city', 'zip_code', 'status', 'store_category', 'purchase_type'], 'integer'],
            [['address', 'category'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['first_name', 'last_name', 'store_name'], 'string', 'max' => 255],
            [['contact_number'], 'string', 'max' => 15],
            [['store_category'], 'exist', 'skipOnError' => true, 'targetClass' => StoreCategory::class, 'targetAttribute' => ['store_category' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'contact_number' => 'Contact Number',
            'is_number_verified' => 'Is Number Verified',
            'user_id' => 'User ID',
            'store_name' => 'Store Name',
            'state' => 'State',
            'city' => 'City',
            'address' => 'Address',
            'zip_code' => 'Zip Code',
            'status' => 'Status',
            'store_category' => 'Store Category',
            'purchase_type' => 'Purchase Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[StoreCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStoreCategory()
    {
        return $this->hasOne(StoreSubCategory::class, ['id' => 'store_category']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
