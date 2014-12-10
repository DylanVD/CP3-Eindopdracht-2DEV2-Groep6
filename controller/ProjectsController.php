<?php
require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'ProjectDAO.php';
require_once WWW_ROOT . 'dao' . DS . 'ItemDAO.php';

class ProjectsController extends Controller {

    private $projectDAO;
	private $itemDAO;

    function __construct() {
		$this->projectDAO = new ProjectDAO();
		$this->itemDAO = new ItemDAO();
    }

    public function index(){

    }

    public function project() {
    $this->set('projects',$this->projectDAO->selectAll());
  //  $project = $this->projectDAO->selectById();

    $items = $this->itemDAO->selectAll();


      $this->set('items',$items);

       $errors = array();

        if(!empty($_FILES['image'])){
            if(!empty($_FILES['image']['error'])){
                $errors['image'] = 'Something went wrong';

            }
            if(empty($errors['image'])){
                $size = getImageSize($_FILES['image']['tmp_name']);
                if(empty($size)){
                    $errors['image']= 'not an image';
                }
            }
             if(empty($errors['image'])){
                 if($size['0'] > 300 && $size['1'] > 300){
                     $errors['image'] = 'image must be smaller than 300x300px';
                 }
             }
            if(empty($errors['image'])){
                $sourceFile = $_FILES['image']['tmp_name'];
                $destFile = WWW_ROOT . 'uploads' . DS . $_FILES['image']['name'];

               move_uploaded_file($sourceFile, $destFile);

                $dotPos = strrpos($_FILES['image']['name'],'.');
                $name = substr($_FILES['image']['name'],0,$dotPos);
                $extension = substr($_FILES['image']['name'],$dotPos+ 1);

                $data = array(
                    'items_image' => $name,
                    'items_extension' => $extension
                );
                $insertedItem = $this->itemDAO->insert($data);
            }
        }

        if(empty($errors)){
            if(!empty($insertedItem)){
                $_SESSION['info']='Item added';
                header('Location: index.php?page=project');
                exit();
            }
        }else{
            $_SESSION['error'] = 'Failed to add';
        }
        $this->set('errors',$errors);
    }

    public function newProject() {
		
		if(empty($errors)) {
                $data = array(
                    'user_id' => $user_id,
                    'title' => $title
                );
                $newproject = $this->projectDAO->insert($data);
				if(!empty($newproject)) {
					$_SESSION['info'] = 'Project toegevoegd';
					header('Location:index.php?page=project');
				
				exit();
				}		
    	}	
    }
}

