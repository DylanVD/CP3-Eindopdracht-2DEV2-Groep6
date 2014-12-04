<?php
require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'UserDAO.php';

class UsersController extends Controller {

	private $userDAO;

    function __construct() {
    	$this->userDAO = new UserDAO();
    }

    public function index() {
    }


    public function register() {
    	$errors = array();
		if(!empty($_POST)) {
			if(empty($_POST['email'])) {
				$errors['email'] = 'Please enter your email';
			} else {
				//check unique email
				$existing = $this->userDAO->selectByEmail($_POST['email']);
				if(!empty($existing)) {
					$errors['email'] = 'Email address is already in use';
				}
			}
			if(empty($_POST['username'])) {
				$errors['username'] = 'Please enter your username';
			}
			if(empty($_POST['firstname'])) {
				$errors['firstname'] = 'Please enter your firstname';
			}
			if(empty($_POST['lastname'])) {
				$errors['lastname'] = 'Please enter your lastname';
			}
			if(empty($_POST['password'])) {
			$errors['password'] = 'Please enter a password';
			}
			if($_POST['repeat'] != $_POST['password']) {
			$errors['repeat'] ='Passwords do not match';
			}
			if(empty($errors)) {
				$data = array();
				$data['email'] = $_POST['email'];
				$data['username'] = $_POST['username'];
				$data['firstname'] = $_POST['firstname'];
				$data['lastname'] = $_POST['lastname'];
				$data['password'] = $_POST['password'];
				$registration = $this->userDAO->insert($data);
				if(!empty($registration)) {
					$_SESSION['info'] = 'Registration successful';
					header('Location:index.php');
					exit();
				} else {
					$_SESSION['error'] = 'Registration failed';
				}
			} else {
				$_SESSION['error'] = 'Please complete the form';
			}
		}
		$this->set('errors', $errors);
	}
}
