<?php
require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'ProjectDAO.php';
require_once WWW_ROOT . 'dao' . DS . 'UserDAO.php';

require_once WWW_ROOT . 'dao' . DS . 'ItemDAO.php';

class ProjectsController extends Controller {

    private $projectDAO;
	private $itemDAO;
    private $userDAO;

    function __construct() {
		$this->projectDAO = new ProjectDAO();
		$this->itemDAO = new ItemDAO();
        $this->userDAO = new UserDAO();
    }

    public function index(){

    }

    public function project() {
        $board=false;
        if(!empty($_GET['id'])){
            $board = $this->projectDAO->selectById($_GET['id']);
        }
        $this->set('board',$board);

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

        $errors = array();
        if(empty($_SESSION['user']['id'])){
            $_SESSION['error'] = 'you need to login blanla';
            $this->redirect('index.php');
        }

        $user = $this->userDAO->selectById($_SESSION['user']['id']);
        $this->set('user', $user);

        if(!empty($_POST)) {
            if(empty($_POST['title'])) {
                $errors['title'] = 'Please enter a title';
            // } else {
            //     //check unique email
            //     $existing = $this->projectDAO->selectByTitle($_POST['title']);
            //     if(!empty($existing)) {
            //         $errors['title'] = 'title is already in use';
            //     }
            }
            if(empty($_POST['title'])) {
                $errors['title'] = 'Please enter your username';
            }
        
            if(empty($errors)) {
                $data = array(
                //$data['moderator_id'] = $_SESSION['user']['id'];
                'title' => $_POST['title'],
                'user_id' => $_SESSION['user']['id']);

                $createProject = $this->projectDAO->insert($data);
                if(!empty($createProject)) {
                    $_SESSION['info'] = 'project created';
                    header('Location:index.php?page=project&id='.$createProject['id']);
                    exit();
                } else {
                    $_SESSION['error'] = 'project failed';
                }
            } else {
                $_SESSION['error'] = 'Please complete the form';
            }
        }
        $this->set('errors', $errors);
    }




        //$this->set('project',$this->projectsDAO->selectByProjectId($_GET['id']));

        /*
    	if(!empty($_POST['action']) && !empty($_SESSION['user']['id'])){

            $user = $this->projectDAO->selectById($_SESSION['user']['id']);
            $this->set('user',$user);
        
            if(!empty($_POST)){

                $errors = array();
                if(empty($errors)){
                    if(empty($_POST['title'])){
                        $errors['title'] = 'Please enter a title';

                    }else{
                        $existing = $this->projectDAO->selectByTitle($_POST['title']);
                        if(!empty($existing)){
                            $errors['title'] = 'Title is already in use';
                        }
                    }

                    $_SESSION['info'] = 'project created';
                    $this->redirect('index.php?page=project');

                    /*
                    $addItem = array(

                        'title' => $_POST['title'],
                        'user_id' => $_SESSION['user']['id']);

                    $insertedItem = $this->projectDAO->insert($addItem);

                    if(!empty($insertedItem)){
                        $_SESSION['info']='project added';
                        header('Location: index.php?page=project');
                        exit();
                    }else{
                        $_SESSION['error'] = 'Failed to add';
                    }
                }else{
                    $_SESSION['error'] = 'Failed to add';
                }
                $this->set('errors',$errors);
                */
            }





