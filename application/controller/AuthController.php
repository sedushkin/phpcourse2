<?php

namespace application\controller;

use \application\service\Service;
use \application\controller\BaseController;
use \application\model\UserModel;
use \application\model\AuthModel;

/**
 * /?path=auth/{action}
 */
class AuthController extends BaseController {

	public function action_index() {
		return $this->view->render("auth/index", [
			"title"=>$this->config->get("title"),
			"version"=>$this->config->get("version")
		]);
	}	

	/**
	 * /?path=auth/login
	 */
	public function action_login() {

		if (!$this->request->isPost()) {
			return $this->view->render("error500");	
		}

		$login = $this->request->getPost("login");
		$password = $this->request->getPost("password");
		$userModel = new UserModel();
		$user = $userModel->getUserByNameAndPassword($login, $password);
		
		$authModel = new AuthModel();
		echo ("Аутмодель2");
		
		$authModel->createSession($user);

		echo ("Аутмодель3");
		
		$this->request->redirect("/?path=home/index");
		
	}

/**
	 * /?path=auth/signup
	 */
	public function action_signup() {
		return $this->view->render("auth/signup");
	}

	/**
	 * /?path=auth/register
	 */
	public function action_register() {

		if (!$this->request->isPost()) {
			$this->request->redirect("/?path=auth/signup&message=Post is required");
		}

		$name = $this->request->getPost("name");
		$password = $this->request->getPost("password");
		$email = $this->request->getPost("email");

		if (!$password || !$email) {
			$this->request->redirect("/?path=auth/signup&message=Login and password are required");
		}

		$userModel = new UserModel();
		$userModel->createUser($name, $password, $email);

		$this->session->set("user", $user);
		$this->request->redirect("/?path=user/index");
	}	




	/**
	 * /?path=auth/logout
	 */
	public function action_logout() {
		$this->session->destroy();
		$this->request->redirect("/?path=home/index");
	}	
}