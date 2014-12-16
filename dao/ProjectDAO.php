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

	public function selectByProjectId($id){
        $sql="SELECT * FROM `whiteboard_projects` INNER JOIN `whiteboard_items` ON whiteboard_items.project_id = whiteboard_projects.id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

	public function selectByTitle($title) {
		$sql = "SELECT * FROM `whiteboard_projects` WHERE `title` = :title";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':title', $title);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($data){
		$errors = $this->getValidationErrors($data);
		if(empty($errors)) {
			$sql = "INSERT INTO `whiteboard_projects` (`user_id`, `title`)
						VALUES (:user_id, :title)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':user_id', $_SESSION['user']['id']);
			$stmt->bindValue(':title', $data['title']);
			if($stmt->execute()){
				$insertedId = $this->pdo->lastInsertId();
				return $this->selectById($insertedId);
			}
		}
			return false;
	}

	public function getValidationErrors($data) {
		$errors = array();
		if(empty($data['title'])) {
			$errors['title'] = 'Geef een titel aan je project';
		}
		 if(empty($data['user_id'])){
            $errors['user_id'] = 'Please enter a user_id';
        }
		return $errors;
	}

}
