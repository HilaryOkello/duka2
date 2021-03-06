<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mpesac2bcallbacks".
 *
 * @property string $MerchantRequestID
 * @property string $CheckoutRequestID
 * @property string $request
 * @property int $ResultCode
 * @property string $ResultDesc
 * @property float|null $transAmount
 * @property string|null $MpesaReceiptNumber
 * @property string|null $TransactionDate
 * @property string|null $PhoneNumber
 * @property string $createdAt
 * @property string|null $updatedAt
 */
class Mpesac2bcallbacks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mpesac2bcallbacks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MerchantRequestID', 'CheckoutRequestID', 'request', 'ResultCode', 'ResultDesc'], 'required'],
            [['ResultCode'], 'integer'],
            [['transAmount'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['MerchantRequestID', 'CheckoutRequestID', 'ResultDesc', 'TransactionDate', 'PhoneNumber'], 'string', 'max' => 191],
            [['request'], 'string', 'max' => 5000],
            [['MpesaReceiptNumber'], 'string', 'max' => 50],
            [['MerchantRequestID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MerchantRequestID' => 'Merchant Request ID',
            'CheckoutRequestID' => 'Checkout Request ID',
            'request' => 'Request',
            'ResultCode' => 'Result Code',
            'ResultDesc' => 'Result Desc',
            'transAmount' => 'Trans Amount',
            'MpesaReceiptNumber' => 'Mpesa Receipt Number',
            'TransactionDate' => 'Transaction Date',
            'PhoneNumber' => 'Phone Number',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
