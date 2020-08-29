<?php

namespace application\controller;

use \application\service\Service;
use \application\service\FrontController;
use \application\model\GalleryModel;



class GalleryController extends FrontController {

	public function action_index() {

		$image = new GalleryModel();
		$galleryCollection = $image->getImages();

		$this->view->render("gallery/index", [
			"title"					=> $this->config->get("title"),
			"galleryCollection"	=> $galleryCollection
		]);
	}

	public function action_image() {
		$id=$this->request->get('id');
		$image = new GalleryModel();
		$galleryCollection = $image->getImageById($id);

		$this->view->render("gallery/image", [
			"title"					=> $this->config->get("title"),
			"galleryCollection"	=> $galleryCollection
		]);
	}

	public function action_new() {

		if (!$this->request->isPost()) {
			return $this->view->render("error500");				
		}

		return $this->view->render("gallery/new", [
			"title"=>$this->config->get("title"),
			"name"=>$this->request->get("name"), //$_POST["name"]
			"src"=>$this->request->get("src"),
		]);		
	}	

}