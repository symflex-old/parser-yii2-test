<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property int $id
 * @property int $network_id
 * @property int $internal_id
 * @property string $name
 * @property string $description
 * @property double $payout
 *
 * @property CountyToOffers[] $countyToOffers
 * @property Country[] $countries
 */
class Offers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['network_id', 'internal_id', 'name', 'payout'], 'required'],
            [['network_id', 'internal_id'], 'integer'],
            [['description'], 'string'],
            [['payout'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'network_id' => 'Network ID',
            'internal_id' => 'Internal ID',
            'name' => 'Name',
            'description' => 'Description',
            'payout' => 'Payout',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountyToOffers()
    {
        return $this->hasMany(CountyToOffers::className(), ['offer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(Country::className(), ['id' => 'country_id'])->viaTable('county_to_offers', ['offer_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return OffersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OffersQuery(get_called_class());
    }
}
