<?php

namespace application\model;

use \application\service\Service;
use \application\model\BaseModel;
use \application\model\UserModel;

class AuthModel extends BaseModel {

	public function createSession($user) {
	echo ("начинаем");
		$this->session->set("user", $user);
	}
	
}