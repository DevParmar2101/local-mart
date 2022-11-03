<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;

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
 * @property StoreCategory $storeCategory
 * @property StoreSubCategory $storeSubCategory
 * @property UserFavourite[] $userFavourites
 */
class Product extends BaseActiveRecord
{
    const PUBLISHED = 10;
    const UNPUBLISHED = 9;
    const UNDER_REVIEW = 8;
    const DRAFT = 7;
    const INAPPROPRIATE = 6;

    const STATUS_INAPPROPRIATE = 'Inappropriate to publish!';
    const STATUS_DRAFT = 'Draft';
    const STATUS_REVIEW = 'Under Review';
    const STATUS_UNPUBLISHED = 'Unpublished';
    const STATUS_PUBLISHED = 'Published';

    const GRID_VIEW = 'gridview';

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
            [['category', 'sub_category', 'store_id', 'user_id', 'product_name', 'product_price', 'quantity', 'status', 'information', 'description', 'available_for'], 'required'],
            [['store_id', 'category', 'quantity', 'available_for', 'status', 'user_id'], 'integer'],
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
     * @return ActiveQuery
     */
    public function getProductImages()
    {
        return $this->hasMany(ProductImage::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Store]].
     *
     * @return ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(UserStore::class, ['id' => 'store_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getStoreCategory()
    {
        return $this->hasOne(StoreCategory::class,['id' => 'category']);
    }

    /**
     * @return ActiveQuery
     */
    public function getStoreSubCategory()
    {
        return $this->hasOne(StoreSubCategory::class,['id' => 'sub_category']);
    }

    /**
     * Gets query for [[UserFavourites]].
     *
     * @return ActiveQuery
     */
    public function getUserFavourites()
    {
        return $this->hasMany(UserFavourite::class, ['product_id' => 'id']);
    }

    public function getProductStatus($status = null, $gridView = null)
    {
        if ($gridView){
            if ($status == self::INAPPROPRIATE) {
                return '<span class="badge bg-danger">'.self::STATUS_INAPPROPRIATE.'</span>';
            }elseif ($status == self::DRAFT) {
                return '<span class="badge bg-warning">'.self::STATUS_DRAFT.'</span>';
            }elseif ($status == self::UNDER_REVIEW) {
                return '<span class="badge bg-secondary">'.self::STATUS_REVIEW.'</span>';
            }elseif ($status == self::UNPUBLISHED) {
                return '<span class="badge bg-dark">'.self::STATUS_UNPUBLISHED.'</span>';
            }elseif ($status == self::PUBLISHED) {
                return  '<span class="badge bg-success">'.self::STATUS_PUBLISHED.'</span>';
            }
        }
        $array = [
            self::INAPPROPRIATE => self::STATUS_INAPPROPRIATE,
            self::DRAFT => self::STATUS_DRAFT,
            self::UNDER_REVIEW => self::STATUS_REVIEW,
            self::UNPUBLISHED => self::STATUS_UNPUBLISHED,
            self::PUBLISHED => self::STATUS_PUBLISHED,
        ];
        if (!is_null($status)) {
            return $array[$status];
        }
        return $array;
    }
}
