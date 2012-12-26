<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public $autoLogin;
	private $_id;
	
	public function _construct($username, $password, $autoLogin){
		$this->username = $username;
		$this->password = $password;
		$this->autoLogin = $autoLogin;
	}
	public function authenticate() {
		$user = EmployeeForm::model()->findByAttributes(array('username' => $this->username));
		if ($user === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}else{
			// check Auto or Not
			$password = ($this->autoLogin == false) ? MSecure::password($this->username . $this->password . $user->registered): $this->password;
			if ($user->password !== $password) {
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			} else {
				$this->_id = $user->id;
				if ($user->lastvisited === NULL) {
					$lastLogin = new CDbExpression('NOW()');
				} else {
					$lastLogin = $user->lastvisited;
				}
				// RBAC
				$roles = CJSON::decode($user->role);
				$auth = Yii::app()->authManager;
				foreach ($roles as $role) {
					if (!$auth->isAssigned($role, $this->_id)) {
						if ($auth->assign($role, $this->_id)) {
							Yii::app()->authManager->save();
						}
					}
				}
				$this->setState('email', $user->email);
				$this->setState('lastvisited', $lastLogin);
				$this->errorCode = self::ERROR_NONE;
			}
		}
	return !$this->errorCode;
}
public function getId() {
return $this->_id;
} 
}