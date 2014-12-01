<?php
require_once __DIR__ . '/DAO.php';
// whiteboard_projects

class UserDAO extends DAO {

	public function selectAll(){
		$sql = "SELECT * FROM `whiteboard_users`";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectById($id){
		$sql = "SELECT * FROM `whiteboard_users` WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function selectByEmail($email){
		$sql = "SELECT * FROM `whiteboard_users` WHERE `email` = :email";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':email', $email);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	// public function insert($data){
	// 	$errors = $this->getValidationErrors($data);
	// 	if(empty($errors)) {
	// 		require_once 'phpass/Phpass.php';
	// 		$hasher = new \Phpass\Hash;
	// 		$passwordHash = $hasher->hashPassword($data['password']);
	// 		$sql = "INSERT INTO `tiender_users` (`email` ,`username`, `password`) VALUES (:email, :username, :password)";
	// 		$stmt = $this->pdo->prepare($sql);
	// 		$stmt->bindValue(':email', $data['email']);
	// 		$stmt->bindValue(':username', $data['username']);
	// 		$stmt->bindValue(':password', $passwordHash);
	// 		return $stmt->execute();
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function getValidationErrors($data) {
	// 	$errors = array();
	// 	if(empty($data['email'])) {
	// 		$errors['email'] = 'Please enter a email';
	// 	}
	// 	if(empty($data['username'])) {
	// 		$errors['username'] = 'Please enter a username';
	// 	}
	// 	if(empty($data['password'])) {
	// 		$errors['password'] = 'Please enter a password';
	// 	}

	// 	return $errors;
	// }

}
