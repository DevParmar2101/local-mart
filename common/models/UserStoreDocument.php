<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user_store_document".
 *
 * @property int $id
 * @property string|null $document_name
 * @property string|null $document
 * @property int|null $status
 * @property string|null $error_message
 * @property int|null $document_verified_by
 * @property int|null $store_id
 *
 * @property User $documentVerifiedBy
 * @property UserStore $userStore
 */
class UserStoreDocument extends BaseActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_store_document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'document_verified_by', 'store_id'], 'integer'],
            [['document_name', 'document', 'error_message'], 'string', 'max' => 255],
            [['document_verified_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['document_verified_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'document_name' => 'Document Name',
            'document' => 'Document',
            'status' => 'Status',
            'error_message' => 'Error Message',
            'document_verified_by' => 'Document Verified By',
        ];
    }

    /**
     * Gets query for [[DocumentVerifiedBy]].
     *
     * @return ActiveQuery
     */
    public function getDocumentVerifiedBy(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'document_verified_by']);
    }

    /**
     * @return ActiveQuery
     */
    public function getUserStore(): ActiveQuery
    {
        return $this->hasOne(UserStore::class, ['id' => 'store_id']);
    }

    /**
     * Creates and populates a set of models.
     *
     * @param string $modelClass
     * @param array $multipleModels
     * @return array
     */
    public static function createMultiple($modelClass, $multipleModels = [])
    {
        $model    = new $modelClass;
        $formName = $model->formName();
        $post     = Yii::$app->request->post($formName);
        $models   = [];

        if (! empty($multipleModels)) {
            $keys = array_keys(ArrayHelper::map($multipleModels, 'id', 'id'));
            $multipleModels = array_combine($keys, $multipleModels);
        }

        if ($post && is_array($post)) {
            foreach ($post as $i => $item) {
                if (isset($item['id']) && !empty($item['id']) && isset($multipleModels[$item['id']])) {
                    $models[] = $multipleModels[$item['id']];
                } else {
                    $models[] = new $modelClass;
                }
            }
        }

        unset($model, $formName, $post);

        return $models;
    }
}
