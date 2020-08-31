<?php

namespace application\service;

use \application\service\Service;

class FrontController {

	protected 
		$view,
		$config,
		$request,
		$session;
	
	public function __construct() {
		$this->session = Service::get("session");
		$this->view = Service::view();
		$this->config = Service::config();
		$this->request = Service::request();
	}

	protected function before() {
		return true;
	}

	protected function after() {
		return true;
	}

	/**
	 * /?path=controller/action
	 * Ex: /?path=home/index
	 */
	public function run() {

		if ($_SERVER['REQUEST_URI'] == "/") {
			$this->request->set("path", "home/index");
		}
		
		if (is_null($this->request->get("path"))) {
			throw new \Exception("Wrong path");
		}

		list($controller, $action) = explode("/", $this->request->get("path"));

		//HomeController
		$class = '\\application\\controller\\'.ucfirst($controller)."Controller";

		if (!class_exists($class)) {
			return $this->view->render("error500");
		}

		$controller = new $class;

		if (!method_exists($controller, "action_".$action)) {
			return $this->view->render("error500");
		}

		if (!$this->before()){
			return $this->view->render("error500");
		}

		$result = $controller->{"action_".$action}();

		$this->after();

		return $result;
	}
}