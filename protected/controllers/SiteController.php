<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	/**
	 * Lost password screen
	*/
	public function actionLostpassword()
	{	
		$model = new LostPasswordForm;
		
		if(isset($_POST['LostPasswordForm']))
	    {
	        $model->attributes=$_POST['LostPasswordForm'];
	        if($model->validate())
			{					
				// Grab the member data
				$member = Members::model()->findByAttributes(array('email' => $model->email));
	
				// Create secret reset link
				$random = $member->hashPassword( $member->email . $member->username , microtime(true) );
				$link = $this->createAbsoluteUrl('/login/reset', array( 'q' => $random, 'lang' => false ));
				
				$message = Yii::t('login', "Dear {username},<br /><br />You've asked a reset for your password.<br /><br /> 
											Please click the link below in order to perform the reset and get a new password emailed to you.<br /><br />
											The reset link is:<br /><br />
											----------------------<br />
											{link}<br />
											----------------------<br /><br /><br />
											<em>If you did not request this reset then please ignore this email.</em>",
											array( '{username}' => $member->username, '{link}' => $link ));
											
				$message .= Yii::t('global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />', array('{team}'=>Yii::app()->name));							
				
				$email = Yii::app()->email;
				$email->subject = Yii::t('login', 'Password Reset Request');
				$email->to = $member->email;
				$email->from = Yii::app()->params['emailin'];
				$email->replyTo = Yii::app()->params['emailout'];
				$email->message = $message;
				$email->send();
				
				// Save the key for this member
				$member->passwordreset = $random;
				
				$member->update();
				
				Yii::app()->user->setFlash('success', Yii::t('login', 'Thank You. Check your email for the password reset link.'));
				//$model = new LostPasswordForm();
			}
	    }
	
		// Add page breadcrumb and title
		//$this->pageTitle[] = Yii::t('index', 'Lost Password');
		//$this->breadcrumbs[ Yii::t('login', 'Lost Password') ] = '';
		
		$this->render('lostpassword', array('model' => $model));
	}
	/**
	 * Check the var in the password form and if it is ok 
	 * then reset the password and email the member the new one.
	 */
	public function actionReset()
	{
		$q = Yii::app()->format->text( $_GET['q'] );
		
		// Search for this in the DB
		$member = Members::model()->findByAttributes(array('passwordreset'=>$q));
		
		if( !$member )
		{
			Yii::app()->user->setFlash('error', Yii::t('login', 'Sorry, Nothing was found for that reset link.'));
        	$this->redirect('index/index');
		}
		
		// We matched so now reset the reset link,
		// Create a new password and save it for that member
		// Email and redirect
		
		// Create secret reset link
		$password = $member->generatePassword(5, 10);
		$hashedPassword = $member->hashPassword( $password, $member->email );
		
		$message = Yii::t('login', "Dear {username},<br /><br />
									We have reseted your password successfully.<br /><br />
									You new password is: <b>{password}</b><br />",
									array( '{username}' => $member->username, '{password}' => $password ));
									
		$message .= Yii::t('global', '<br /><br />----------------<br />Regards,<br />The {team} Team.<br />', array('{team}'=>Yii::app()->name));							
		
		$email = Yii::app()->email;
		$email->subject = Yii::t('login', 'Password Reset Completed');
		$email->to = $member->email;
		$email->from = Yii::app()->params['emailin'];
		$email->replyTo = Yii::app()->params['emailout'];
		$email->message = $message;
		$email->send();
		
		// Save the key for this member
		$member->passwordreset = '';
		$member->password = $hashedPassword;
		$member->scenario = 'lostpassword';
		
		$member->save();
		
		Yii::app()->user->setFlash('success', Yii::t('login', 'Thank You. Your password was reset. Please check your email for you new generated password.'));
    	$this->redirect('index/index');
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}