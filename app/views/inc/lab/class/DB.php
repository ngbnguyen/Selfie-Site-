<?php

class DB {
  public $conn;
  public function __construct() {
    $host = 'localhost';
    $user = 'root';
    $pw   = '';
    $db   = 'itec2018';

    $this->conn = new mysqli($host, $user, $pw, $db);
    return $this->conn;

  }
  public function query($query) {
    return $this->conn->query($query);
  }
}
