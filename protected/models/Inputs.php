<?php

/**
 * This is the model class for table "inputs".
 *
 * The followings are the available columns in table 'inputs':
 * @property integer $id
 * @property string $projectname
 * @property integer $call
 * @property string $sll
 * @property string $sspn
 * @property string $z
 * @property string $results
 * @property string $step
 */
class Inputs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inputs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'projectname' => 'projectname',
			'call' => 'call',
			'sll' => 'sll',
			'sspn' => 'sspn',
			'z' => 'z',
			'results' => 'results',
			'step' => 'step',
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
		$criteria->compare('projectname',$this->projectname,true);
		$criteria->compare('call',$this->call);
		$criteria->compare('sll',$this->sll,true);
		$criteria->compare('sspn',$this->sspn,true);
		$criteria->compare('z',$this->z,true);
		$criteria->compare('results',$this->results,true);
		$criteria->compare('step',$this->step,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inputs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
