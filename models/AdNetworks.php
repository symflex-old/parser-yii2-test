<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ad_networks".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 */
class AdNetworks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ad_networks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['name', 'url'], 'string', 'max' => 255],
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
            'url' => 'Url',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AdNetworksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdNetworksQuery(get_called_class());
    }
}
