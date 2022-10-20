<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_store_document".
 *
 * @property int $id
 * @property string|null $document_name
 * @property string|null $document
 * @property int|null $status
 * @property string|null $error_message
 * @property int|null $document_verified_by
 *
 * @property User $documentVerifiedBy
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
            [['status', 'document_verified_by'], 'integer'],
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
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentVerifiedBy()
    {
        return $this->hasOne(User::class, ['id' => 'document_verified_by']);
    }
}
