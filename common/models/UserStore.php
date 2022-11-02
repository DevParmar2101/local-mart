<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

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
 * @property string|null $document_one
 * @property int|null $document_one_verified
 * @property string|null $document_one_error_message
 * @property string|null $document_two
 * @property int|null $document_two_verified
 * @property string|null $document_two_error_message
 * @property string|null $profile_image
 * @property string $uuid
 *
 * @property StoreCategory $storeCategory
 * @property User $user
 */
class UserStore extends BaseActiveRecord
{
    const ONLINE = 1;
    const OFFLINE = 2;
    const BOTH = 3;

    const NOT_VERIFIED = 0;
    const VERIFIED = 1;

    const INACTIVE = 0;
    const ACTIVE = 1;
    const PENDING = 2;
    const DRAFT = 3;
    const REJECT = 4;

    const ONLINE_TEXT = 'Only Online';
    const OFFLINE_TEXT = 'Only Offline';
    const BOTH_TEXT = 'Both';

    const NOT_VERIFIED_TEXT = 'Not Verified';
    const VERIFIED_TEXT = 'Verified';

    const STATUS_INACTIVE = 'Inactive';
    const STATUS_ACTIVE = 'Active';
    const STATUS_PENDING = 'Under Review';
    const STATUS_DRAFT = 'Draft';
    const STATUS_REJECT = 'Reject';

    const DOCUMENT = 'document_section';
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
            [['first_name', 'last_name', 'contact_number', 'store_name', 'state', 'city', 'address', 'zip_code', 'uuid'], 'required'],

            [['is_number_verified', 'user_id', 'state', 'city', 'zip_code', 'status', 'store_category', 'purchase_type'], 'integer'],

            [['address'], 'string'],

            [['created_at', 'updated_at', 'document_one_verified', 'document_one_error_message', 'document_two_verified', 'document_two_error_message', 'profile_image'], 'safe'],

            [['first_name', 'last_name', 'store_name', 'document_one', 'document_one_error_message', 'document_two', 'document_two_error_message', 'profile_image'], 'string', 'max' => 255],

            [['contact_number', 'document_one_verified', 'document_two_verified'], 'string', 'max' => 15],

            [['document_one', 'document_two'], 'required', 'on' => self::DOCUMENT],

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
            'purchase_type' => 'Selling Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'profile_image' => 'Profile Image',
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

    /**
     * @param $type
     * @return string|string[]
     */
    public function getSellingType($type=null)
    {
        $array = [
            self::ONLINE => self::ONLINE_TEXT,
            self::OFFLINE => self::OFFLINE_TEXT,
            self::BOTH => self::BOTH_TEXT
        ];
        if (!is_null($type)) {
            return $array[$type];
        }
        return $array;
    }

    /**
     * @param $status
     * @return string|string[]
     */
    public function getSellerStatus($status = null,$seller_dashboard=null)
    {
        if ($seller_dashboard) {
            $array = [
                self::ACTIVE => '<h6 class="badge bg-success">' . self::STATUS_ACTIVE . '</</h6>',
                self::INACTIVE => '<h6 class="badge bg-secondary">' . self::STATUS_INACTIVE . '</h6>',
                self::PENDING => '<h6 class="badge bg-warning">' . self::STATUS_PENDING . '</h6>',
                self::DRAFT => '<h6 class="badge bg-info">' . self::STATUS_DRAFT . '</h6>',
                self::REJECT => '<h6 class="badge bg-danger">' . self::STATUS_REJECT . '</h6>',
            ];

            if (!is_null($status)) {
                return $array[$status];
            }
            return $array;
        } else {
            $array = [
                self::ACTIVE => self::STATUS_ACTIVE,
                self::INACTIVE => self::STATUS_INACTIVE,
                self::PENDING => self::STATUS_PENDING,
                self::DRAFT => self::STATUS_DRAFT,
                self::REJECT => self::STATUS_REJECT
            ];
            if (!is_null($status)) {
                return $array[$status];
            }
            return $array;
        }
    }

    /**
     * @param $verified
     * @return string|string[]
     */
    public function getNumberVerified($verified)
    {
        $array = [
            self::NOT_VERIFIED => self::NOT_VERIFIED_TEXT,
            self::VERIFIED => self::VERIFIED_TEXT
        ];
        if (!is_null($verified)) {
            return $array[$verified];
        }
        return $array;
    }

    /**
     * @return array
     */
    public function getStateName(): array
    {
        return ArrayHelper::map(States::find()->where(['status' => BaseActiveRecord::ACTIVE])->all(),'id','name');
    }
}
