<?php

class User {

  private $dbh;
  private $user;

  public function __construct() {
    $this->dbh = new MYSQLIDB;
  }

  // Register User
  public function register($data) {
    $params[] = $data['name'];
    $params[] = $data['email'];
    $params[] = $data['password'];
    $sql = "INSERT INTO users (user_name, user_email, user_hash) VALUES (?,?,?)";
    return $this->dbh->run($sql, "sss", $params);
  }
  // Find User By Email

  // Find user by name
  public function findUserByName($name) {
    $params[] = $name;
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $this->dbh->run($sql, 's', $params);
    $this->user = $this->dbh->single();
    if($this->dbh->countRows() > 0) {
      return true;
    } else {
      return false;
    }

  }

  public function returnName($name) {
    $params[] = $name;
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $this->dbh->run($sql, 's', $params);
    return $this->dbh->single();
  }


  public function login($data) {
    $params[] = $data['name'];
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $this->dbh->run($sql, 's', $params);
    $this->user = $this->dbh->single();
    $hash = $this->user['user_hash'];
    if(password_verify($data['password'], $hash)) {
      $_SESSION['msg'] = "You have logged in successfully" . $this->user['user_name'];
      $_SESSION['msgClass'] = "success";
      $_SESSION['user_id'] = $this->user['id'];
      $_SESSION['user_name'] = $this->user['user_name'];
      $_SESSION['loggedin'] = true;
      redirect('/pages/index');
    } else {
      die("there was an error");
    }
  }
}
