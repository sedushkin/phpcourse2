<?php

namespace application\model;

use \application\service\Service;
use \application\model\BaseModel;

class GalleryModel extends BaseModel {

	public function getImages() {
		$statement = self::$connection->prepare("SELECT * FROM gallery");
		$statement->execute();   

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function getImageById($id) {
		$statement = self::$connection->prepare("SELECT * FROM gallery WHERE id = :id");
		$statement->bindValue(':id', $id, \PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}	

	public function createNewImage() {
		$statement = self::$connection->prepare("INSERT INTO gallery ...");
		$statement->bindValue(':id', $id, \PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}		
}