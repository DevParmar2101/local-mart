<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int|null $store_id
 * @property string|null $product_name
 * @property int|null $category
 * @property int|null $sub_category
 * @property float|null $product_price
 * @property float|null $discount
 * @property int|null $quantity
 * @property string|null $information
 * @property string|null $description
 * @property string|null $warranty_period
 * @property int|null $available_for
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property integer|null $user_id
 *
 * @property ProductImage[] $productImages
 * @property UserStore $store
 * @property UserFavourite[] $userFavourites
 */
class Product extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'sub_category', 'store_id', 'user_id', 'product_name', 'product_price', 'quantity', 'status'], 'required'],
            [['store_id', 'category', 'sub_category', 'quantity', 'available_for', 'status', 'user_id'], 'integer'],
            [['product_price', 'discount'], 'number'],
            [['information', 'description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['product_name', 'warranty_period'], 'string', 'max' => 255],
            [['store_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserStore::class, 'targetAttribute' => ['store_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'store_id' => 'Store ID',
            'product_name' => 'Product Name',
            'category' => 'Category',
            'sub_category' => 'Sub Category',
            'product_price' => 'Product Price',
            'discount' => 'Discount',
            'quantity' => 'Quantity',
            'information' => 'Information',
            'description' => 'Description',
            'warranty_period' => 'Warranty Period',
            'available_for' => 'Available For',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[ProductImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductImages()
    {
        return $this->hasMany(ProductImage::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Store]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(UserStore::class, ['id' => 'store_id']);
    }

    /**
     * Gets query for [[UserFavourites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserFavourites()
    {
        return $this->hasMany(UserFavourite::class, ['product_id' => 'id']);
    }
}
