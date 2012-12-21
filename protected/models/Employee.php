<?php

/**
 * This is the model class for table "tbl_employee".
 *
 * The followings are the available columns in table 'tbl_employee':
 * @property integer $id
 * @property string $extra_id
 * @property string $email_address
 * @property string $username
 * @property string $passwd
 * @property string $title
 * @property string $fname
 * @property string $sname
 * @property string $address
 * @property string $address2
 * @property string $city
 * @property string $county
 * @property string $state_province
 * @property string $country
 * @property string $post_code
 * @property string $phone_number
 * @property integer $fk_career_degree_id
 * @property string $date_register
 * @property string $last_login
 * @property string $actkey
 * @property string $admin_comments
 * @property string $employee_status
 * @property string $is_active
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email_address, username, passwd, title, fname, sname, address, address2, post_code, phone_number, fk_career_degree_id, actkey', 'required'),
			array('fk_career_degree_id', 'numerical', 'integerOnly'=>true),
			array('extra_id, username, date_register, last_login', 'length', 'max'=>30),
			array('email_address, city', 'length', 'max'=>100),
			array('passwd, actkey', 'length', 'max'=>32),
			array('title', 'length', 'max'=>3),
			array('fname, sname, address, address2, county, state_province', 'length', 'max'=>50),
			array('country, phone_number', 'length', 'max'=>11),
			array('post_code', 'length', 'max'=>8),
			array('admin_comments', 'length', 'max'=>255),
			array('employee_status', 'length', 'max'=>10),
			array('is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, extra_id, email_address, username, passwd, title, fname, sname, address, address2, city, county, state_province, country, post_code, phone_number, fk_career_degree_id, date_register, last_login, actkey, admin_comments, employee_status, is_active', 'safe', 'on'=>'search'),
		);
	}

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
			'extra_id' => 'Extra',
			'email_address' => 'Email Address',
			'username' => 'Username',
			'passwd' => 'Passwd',
			'title' => 'Title',
			'fname' => 'Fname',
			'sname' => 'Sname',
			'address' => 'Address',
			'address2' => 'Address2',
			'city' => 'City',
			'county' => 'County',
			'state_province' => 'State Province',
			'country' => 'Country',
			'post_code' => 'Post Code',
			'phone_number' => 'Phone Number',
			'fk_career_degree_id' => 'Fk Career Degree',
			'date_register' => 'Date Register',
			'last_login' => 'Last Login',
			'actkey' => 'Actkey',
			'admin_comments' => 'Admin Comments',
			'employee_status' => 'Employee Status',
			'is_active' => 'Is Active',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('extra_id',$this->extra_id,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('passwd',$this->passwd,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('sname',$this->sname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('state_province',$this->state_province,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('post_code',$this->post_code,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('fk_career_degree_id',$this->fk_career_degree_id);
		$criteria->compare('date_register',$this->date_register,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('actkey',$this->actkey,true);
		$criteria->compare('admin_comments',$this->admin_comments,true);
		$criteria->compare('employee_status',$this->employee_status,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}