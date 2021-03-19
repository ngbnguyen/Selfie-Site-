<?php

class Users extends Controller {

  public function __construct() {
    $this->userModel = $this->model('User');
  }
  public function index() {
    $this->userModel->findUserByName("admin2");
    $data = $this->userModel->getUserHash();
    $this->view('users/index',$data);
  }

  //register method
  public function register() {
    $data = [
      'name' => '' ,
      'email' => '',
      'password' => '',
      'confirm_password' => '',
      'name_err' => '',
      'password_err' => '',
      'confirm_password_err' => '',
      'email_err' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'email_err' => ''
      ];
      // Username validation > check empty, more than 5 chars and username not taken
      if(empty($data['name'])) {
        $data['name_err'] = "The user name field is empty!";
      } elseif(strlen($data['name']) < 5) {
        $data['name_err'] = "Username must be 5 or more characters long!";
      } elseif($this->userModel->findUserByName($data['name'])) {
        $data['name_err'] = "This username is taken!";
      }
      // Check Password
      if(empty($data['password'])) {
        $data['password_err'] = "The password field is empty!";
      } elseif(strlen($data['password']) < 6) {
        $data['password_err'] = "Password must be 6 or more characters long!";
      }
      //Conform password match
      if($data['password'] != $data['confirm_password']) {
        $data['confirm_password_err'] = "Password do not match!";
      }
      //Check email
      if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)) {
        $data['email_err'] = "Email is invalid!";
      }

      // check if there are any errors, if not call register method on User model
      if(empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_passowrd_err']) && empty($data['email_err'])) {
        //Hash user password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        //call register method on User model
        if($this->userModel->register($data)) {
          $_SESSION['msg'] = "You registered successfully";
          $_SESSION['msgClass'] = "success";
          redirect("/users/login");
        } else {
          die("There was a catastrophic error, move to the bunker");
        }

      }

    }
    $this->view('users/register', $data);
  }

  // Login method
  public function login() {
    $data = [
      'name' => '' ,
      'password' => '',
      'name_err' => '',
      'password_err' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'name' => trim($_POST['name']),
        'password' => trim($_POST['password']),
        'name_err' => '',
        'password_err' => ''
      ];

      // check user field has input, check that user exists in the DB
      if(empty($data['name'])) {
        $data['name_err'] = "The user name field is empty!";
      } elseif(!$this->userModel->findUserByName($data['name'])) {
        $data['name_err'] = "Username is not found!";
      }
      // Check Password
      if(empty($data['password'])) {
        $data['password_err'] = "The password field is empty!";
      }
      //password_verify($data['password'], $this->userModel->getHash()
      if(empty($data['name_err']) && empty($data['password_err'])) {
       $this->userModel->login($data);
      }
    }
    // return the view
    $this->view("users/login", $data);
  }

  // Log out user
  public function logout() {
    $_SESSION = [];
    session_destroy();
    header("Location:" . URLROOT . "/pages/index");
  }

}
