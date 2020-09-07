<?php

namespace application\model;

use \application\service\Service;
use \application\model\BaseModel;
use \application\model\UserModel;
use \application\service\Session;

class AuthModel extends BaseModel {

	public function createSession($user) {
	echo ("начинаем");
	$this->session->set("user", $user);
	print_r($_SESSION);
	echo ("закончили");
	}
	
}