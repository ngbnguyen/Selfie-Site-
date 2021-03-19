<?php
    class Comment{
      private $dbh;

      public function __construct() {
        $this->dbh = new MYSQLIDB;
      }
      public function getComments() {
        $sql = "SELECT * FROM comments";
        $this->dbh->run($sql);
        return $this->dbh->resultSet();
      }
      public function getComment($id) {
        $sql = "SELECT * FROM comments WHERE id = ?";
        $params[] = $id;
        $this->dbh->run($sql,"i", $params);
        if($this->dbh->countRows() == 0) {
          return "No comment found!";
        } else {
          return $this->dbh->single();
        }
      }
      public function createComment($data) {
        $params[] = $_SESSION['user_id'];
        $params[] = $_SESSION['post_id'];
        $params[] = $data['comment_body'];
        $params[] = $data['comment_name'];
        $sql = "INSERT INTO comments (user_id, post_id, comment_body, comment_name) VALUES (?,?,?,?)";
        return $this->dbh->run($sql, 'iiss', $params);
      }



































} ?>
