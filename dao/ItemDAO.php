<?php
require_once __DIR__ . '/DAO.php';
class ItemDAO extends DAO {

	public function selectAll() {
		$sql = "SELECT * FROM `whiteboard_items` ORDER BY ID DESC";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectById($id) {
		$sql = "SELECT * FROM `whiteboard_items` WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($data) {
		$errors = $this->getValidationErrors($data);
		if(empty($errors)) {
			$sql = "INSERT INTO `whiteboard_items` (`items_image`, `items_extension`) VALUES (:items_image, :items_extension)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':items_image', $data['items_image']);
			$stmt->bindValue(':items_extension', $data['items_extension']);
			if($stmt->execute()) {
				$insertedId = $this->pdo->lastInsertId();
				return $this->selectById($insertedId);
			}
		}
		return false;
	}

	public function getValidationErrors($data) {
		$errors = array();
		if(empty($data['items_image'])) {
			$errors['items_image'] = 'Please enter the name';
		}
		if(empty($data['items_extension'])) {
			$errors['items_extension'] = 'Please enter the extension of the file';
		}
		return $errors;
	}

}
