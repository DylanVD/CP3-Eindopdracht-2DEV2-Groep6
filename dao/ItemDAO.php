<?php
require_once WWW_ROOT . 'dao'. DS . 'DAO.php';

class ItemDAO extends DAO{

    public function selectAll(){
        $sql = "SELECT * FROM `whiteboard_items`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectAllDetail(){
        $sql = "SELECT * FROM `whiteboard_items`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectById($id){
        $sql = "SELECT * FROM `whiteboard_items` WHERE `id`= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectByUserId($userId) {
        $sql = "SELECT * FROM `whiteboard_items` WHERE `user_id` = :user_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':user_id', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function insert($data) {
    //     $errors = $this->getValidationErrors($data);
    //     if(empty($errors)) {
    //         $sql = "INSERT INTO `whiteboard_items` (`title`, `extension`,`audio`, `user_id`)
    //         VALUES (:title, :extension, :audio, :user_id)";
    //         $stmt = $this->pdo->prepare($sql);
    //         $stmt->bindValue(':audio', $data['audio']);
    //         $stmt->bindValue(':title', $data['title']);
    //         $stmt->bindValue(':extension', $data['extension']);
    //         $stmt->bindValue(':user_id', $data['user_id']);
    //         if($stmt->execute()) {
    //             $insertedId = $this->pdo->lastInsertId();
    //             return $this->selectById($insertedId);
    //         }
    //     }
    //     return false;
    // }

    // public function getValidationErrors($data) {
    //     $errors = array();
    //     if(empty($data['audio'])) {
    //         $errors['audio'] = 'please enter an audio file';
    //     }
    //     if(empty($data['extension'])) {
    //         $errors['extension'] = 'please enter an extension';
    //     }
    //     if(empty($data['title'])) {
    //         $errors['title'] = 'please enter a title';
    //     }
    //     if(empty($data['user_id'])) {
    //         $errors['user_id'] = 'please enter the user_id';
    //     }
    //     return $errors;

    // }
}
