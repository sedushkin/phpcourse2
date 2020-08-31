<?php

namespace application\model;

use \application\service\Service;
use \application\model\BaseModel;

class CategoryModel extends BaseModel {

	public function getAllCategories() {
		$statement = self::$connection->prepare("SELECT * FROM product_category");
		$statement->execute();

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}	

	public function getCategoryWithProducts($id) {
		$begin=($_POST['begin'])?$_POST['begin']:0;
		$count=($_POST['count'])?$_POST['count']:10;
		$statement = self::$connection->prepare("
			SELECT * 
			FROM 
				product_category 
			LEFT JOIN 
				product ON (product.ext_category = product_category.id)
			WHERE 
				product_category.id = :id 
			AND 
				product.status = :status
			LIMIT ".$begin.",".$count."
		");
		$statement->bindValue(':id', $id, \PDO::PARAM_INT);
		$statement->bindValue(':status', GoodsModel::STATUS_ACTIVE, \PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetchAll(\PDO::FETCH_ASSOC);
		
	}

}