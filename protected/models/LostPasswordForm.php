<?php
	/*
	 * Lost password form model class
	 */
class LostPasswordForm extends CFormModel {
	/*
	 * @var string - email
	 */
	public $email;
	/*
	 * @var string - captcha
	 */
	public $verifycode;
	/*
	 * Table data rules
	 * 
	 * @return array
	 */
	public function rules() {
		return array(
			array('email', 'required'),
			array('email', 'email'),
			array('email', 'exist', 'className'=>'Members', 'message'=>Yii::t('lostpassword', 'Email không tồn tại trong hệ thống! Vui lòng kiểm tra lại')),
			array('email', 'length', 'min'=>'3', 'max'=>'55'),
			array('verifycode', 'captcha'),
		);
	}
	/*
	 * Attribute values
	 * 
	 * @return array
	 */
	public function attributeLabels() {
		return array(
			'email'=>Yii::t('lostpassword', 'Email'),
			'verifycode'=>Yii::t('lostpassword', 'Mã Bảo Mật')
		);
	}
	
	
}
?>
