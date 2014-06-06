<?php

/**
 * This is the model class for table "inputs".
 *
 * The followings are the available columns in table 'inputs':
 * @property integer $id
 * @property string $projectname
 * @property string $call
 * @property string $dol
 * @property string $shir
 * @property string $z
 * @property string $result
 * @property string $catcon
 * @property string $catost
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
            'Rubric'=>array(self::BELONGS_TO, 'Rubric ', 'id')
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
			'dol' => 'dol',
			'shir' => 'shir',
			'z' => 'z',
			'results' => 'results',
			'catcon' => 'catcon',
			'catost' => 'catost',
            'newstart' => 'newstart',
            'ost' => 'ost',
            'rubric' => 'rubric',
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
		$criteria->compare('call',$this->call,true);
		$criteria->compare('dol',$this->dol,true);
		$criteria->compare('shir',$this->shir,true);
		$criteria->compare('z',$this->z,true);
		$criteria->compare('results',$this->result,true);
		$criteria->compare('catcon',$this->catcon,true);
		$criteria->compare('catost',$this->catost,true);
        $criteria->compare('newstart',$this->newstart,true);
        $criteria->compare('ost',$this->ost,true);
        $criteria->compare('rubric',$this->rubric,true);

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
