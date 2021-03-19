<?php

class Post {
  private $dbh;

  public function __construct() {
    $this->dbh = new MYSQLIDB;
  }

  public function getPosts() {
    $sql = "SELECT * FROM posts";
    $this->dbh->run($sql);
    return $this->dbh->resultSet();
  }
  public function getPost($id) {
    $sql = "SELECT * FROM posts WHERE id = ?";
    $params[] = $id;
    $this->dbh->run($sql,"i", $params);
    if($this->dbh->countRows() == 0) {
      return "No post found!";
    } else {
      return $this->dbh->single();
    }
  }
  public function createPost($data) {
    $params[] = $_SESSION['user_id'];
    $params[] = $data['title'];
    $params[] = $data['body'];
    $params[] = $data['file'];
    $sql = "INSERT INTO posts (user_id, post_title, post_body, post_image) VALUES (?,?,?,?)";
    return $this->dbh->run($sql, 'isss', $params);
  }
  public function updatePost($data){
    $sql = "UPDATE posts SET post_title = ?, post_body = ? WHERE posts.id =?";
    $params[] = $data['title'];
    $params[] = $data['body'];
    $params[] = $data['id'];
    return $this->dbh->run($sql,'ssi',$params);
  }
    public function deletePost($id){
      $sql = "DELETE FROM posts WHERE posts.id = ? ";
      $params[] = $id;
      return $this->dbh->run($sql,'i', $params);
    }
}
