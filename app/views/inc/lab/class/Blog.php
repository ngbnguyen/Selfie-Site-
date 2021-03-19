<?php

class Blog {

  public $title;
  public $body;
  public $author;
  public $conn;
  public $results;
  public $position;
  public $pager;
  public $numrows;

  public function __construct($position = 0) {
    $this->position = $position;
    $this->conn = new DB;
    $this->numrows = 415;
  }

  public function getBlogs() {
    $this->results = $this->conn->query("SELECT * FROM wp_posts LIMIT $this->position, 10");

  }

  public function outputBlogs() {
    $output = "";
    foreach ($this->results->fetch_all(MYSQLI_ASSOC) as $blog) {
      $output.= "<h2>" . $blog['post_title'] . "</h2>";
    }
    echo $output;
  }

  public function getPager() {
    $output = "";
    $start = 0;
    if($this->position >= 30) {
      $start = $this->position/10 - 3;
    }
    for($i = 0; $i < 6; $i++) {
      $output.= '<li><a href="wp-blog.php?page='. $start . '0">'.$start.'</a></li>';
      $start++;
    }
    $this->pager = $output;
    include 'includes/pager.php';
  }

  public function blogSearch($request) {
    $this->results = $this->conn->query("SELECT * FROM wp_posts WHERE post_title LIKE '%$request%';");
  }

}
