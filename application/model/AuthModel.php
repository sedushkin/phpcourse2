<?php

namespace application\model;

use \application\service\Service;
use \application\model\BaseModel;
use \application\model\UserModel;
use \application\service\Session;

class AuthModel extends BaseModel {

	public function createSession($user) {
	Session::set("user", $user);
	}
	
}