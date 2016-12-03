<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "child".
 *
 * @property integer $id
 * @property string $nameKg
 * @property string $nameRu
 * @property string $nameEn
 * @property string $birthday
 * @property string $capacityKg
 * @property string $capacityRu
 * @property string $capacityEn
 * @property string $interestKg
 * @property string $interestRu
 * @property string $interestEn
 * @property string $futureKg
 * @property string $futureRu
 * @property string $futureEn
 * @property integer $sex
 * @property integer $help
 * @property integer $concernerid
 * @property string $created_at
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $photo4
 */
class Child extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $imageFiles;

    public static function tableName()
    {
        return 'child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameKg', 'nameRu', 'nameEn', 'birthday', 'sex', 'help', 'created_at'], 'required'],
            [['birthday', 'created_at'], 'safe'],
            [['capacityKg', 'capacityRu', 'capacityEn', 'interestKg', 'interestRu', 'interestEn', 'futureKg', 'futureRu', 'futureEn'], 'string'],
            [['sex', 'help', 'concernerid'], 'integer'],
            [['nameKg', 'nameRu', 'nameEn', 'photo1', 'photo2', 'photo3', 'photo4'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameKg' => 'Name Kg',
            'nameRu' => 'Name Ru',
            'nameEn' => 'Name En',
            'birthday' => 'Birthday',
            'capacityKg' => 'Capacity Kg',
            'capacityRu' => 'Capacity Ru',
            'capacityEn' => 'Capacity En',
            'interestKg' => 'Interest Kg',
            'interestRu' => 'Interest Ru',
            'interestEn' => 'Interest En',
            'futureKg' => 'Future Kg',
            'futureRu' => 'Future Ru',
            'futureEn' => 'Future En',
            'sex' => 'Пол',
            'help' => 'Help',
            'concernerid' => 'Concernerid',
            'created_at' => 'Created At',
            'photo1' => 'Photo1',
            'photo2' => 'Photo2',
            'photo3' => 'Photo3',
            'photo4' => 'Photo4',
        ];
    }
}
