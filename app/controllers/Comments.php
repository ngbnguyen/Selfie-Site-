<?php

class Comments extends Controller {


  public function __construct() {
    if(!$_SESSION['loggedin']) {
      $_SESSION['msg'] = "Please register or login before accessing posts!";
      $_SESSION['msgClass'] = "warning";
      header("Location:" . URLROOT . "/users/register");
    }
    $this->commentModel = $this->model('Comment');
  }
  public function index() {
    $data = $this->commentModel->getComments();
    $this->view("posts/comment", $data);
  }

  public function create() {
    // create data array, empty
    $data = [
      'comment_body' => '',
      'comment_name' => '',
      'body_err' => '',
      'name_err' => '',
    ];
    if($_SERVER['REQUEST_METHOD'] == "POST") {

      $_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
      $data = [
        'comment_body' => trim($_POST['commentContent']), //ay da hinh nhu sai cho nay`
        'comment_name' => trim($_POST['name']),
        'body_err' => '',
        'name_err' => '',
      ];

      if(empty($data['comment_name'])) {
        $data['name_err'] = "There is an error!";
      }
      // check input body
      if(empty($data['comment_body'])) {
        $data['body_err'] = "There is nothing in your comment!";
      }


      // check for any errors before moving data to model to create post
      if( empty($data['body_err']) &&empty($data['name_err']) ) {
        // Rename file and assign its name to $data['file']

        if($this->commentModel->createComment($data)) {
          $_SESSION['msg'] = "Your comment was added successfully";
          $_SESSION['msgClass'] = "success";
          redirect( "/posts/comment");
        } else {
          $_SESSION['msg'] = "There was an error :(";
          $_SESSION['msgClass'] = "danger";
          redirect( "/posts/comment");
        }
      }

    } else {

    }

    $this->view("posts/comment",$data);
  }

  public function show($id) {
    $data = $this->commentModel->getComment($id);
    //$post = $this->postModel->getPost($id);
    $this->view('posts/comment', $data);
  }





















}
?>
