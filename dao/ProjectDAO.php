<?php
require_once __DIR__ . '/DAO.php';

class ProjectDAO extends DAO {

	public function selectAll() {
		$sql = "SELECT * FROM `whiteboard_projects` ORDER BY ID DESC";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectById($id) {
		$sql = "SELECT * FROM `whiteboard_projects` WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($data){
		$errors = $this->getValidationErrors($data);
		if(empty($errors)) {
			$sql = "INSERT INTO `whiteboard_projects` (`user_id`, `title`)
					VALUES (:user_id, :title)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':user_id', $data['user_id']);
			$stmt->bindValue(':title', $data['title']);
			return $stmt->execute();
		} else {
			return false;
		}
	}

	public function getValidationErrors($data) {
		$errors = array();
		if(empty($data['title'])) {
			$errors['title'] = 'Geef een titel aan je project';
		}
		return $errors;
	}

}
