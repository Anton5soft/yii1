<?php

/**
 * This is the model class for table "rubric".
 *
 * The followings are the available columns in table 'rubric':
 * @property integer $id
 * @property string $new
 * @property string $back
 * @property string $create
 */
class Rubric extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rubric';
	}

	/**
	 * @return array validation rules for model attributes.
	 */


	/**
	 * @return array relational rules.
	 */
    public function relations()
    {
        return array(
            'Inputs'=>array(self::HAS_MANY, 'Inputs ', 'id')
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'new' => 'New',
			'back' => 'Back',
			'create' => 'Create',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('new',$this->new,true);
		$criteria->compare('back',$this->back,true);
		$criteria->compare('create',$this->create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rubric the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
