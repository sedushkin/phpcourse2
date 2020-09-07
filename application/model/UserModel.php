<?php

namespace application\model;

use \application\service\Service;
use \application\model\BaseModel;

class UserModel extends BaseModel {

	public function getUserByNameAndPassword($login, $password) {
		$statement = self::$connection->prepare("SELECT * FROM user WHERE login = :login AND password=:password");
		$statement->bindValue(':login', $login, \PDO::PARAM_STR);
		$statement->bindValue(':password', md5($password), \PDO::PARAM_STR);
		$statement->execute();
		return $statement->fetchAll(\PDO::FETCH_ASSOC);
	}
	
	public function getUserById($id) {
		$statement = self::$connection->prepare("SELECT * FROM user WHERE id = :id");
		$statement->bindValue(':id', $id, \PDO::PARAM_INT);
		$statement->execute();

		return $statement->fetch(\PDO::FETCH_ASSOC);
	}

	public function createUser($name, $password, $email) {
		$statement = self::$connection->prepare("INSERT INTO user (name, login, password, `e-mail`) VALUES (:name, :login, :password, :email)");
		$statement->bindValue(':name', $name, \PDO::PARAM_STR);
		$statement->bindValue(':login', $email, \PDO::PARAM_STR);
		$statement->bindValue(':password', md5($password), \PDO::PARAM_STR);
		$statement->bindValue(':email', $email, \PDO::PARAM_STR);
		$statement->execute();

		return true;
	}
}