<?php

class Posts extends Controller {

  use FileManager;

  public function __construct() {
    if(!$_SESSION['loggedin']) {
      $_SESSION['msg'] = "Please register or login before accessing posts!";
      $_SESSION['msgClass'] = "warning";
      header("Location:" . URLROOT . "/users/register");
    }
    $this->postModel = $this->model('Post');
  }

  public function index() {
    $data = $this->postModel->getPosts();
    $this->view("posts/index", $data);
  }

  public function create() {
    // create data array, empty
    $data = [
      'title' => '',
      'body' => '',
      'file' => '',
      'title_err' => '',
      'body_err' => '',
      'file_err' => ''
    ];
    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $this->allowed_files = ['jpeg', 'jpg', 'png','gif'];
      $file = $_FILES['image'];
      // process post form
      $_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
      $data = [
        'title' => trim($_POST['title']),
        'body' => trim($_POST['body']),
        'file' => '',
        'title_err' => '',
        'body_err' => '',
        'file_err' => ''
      ];

      // check input title
      if(empty($data['title'])) {
        $data['title_err'] = "You must add a title to the post!";
      }
      // check input body
      if(empty($data['body'])) {
        $data['body_err'] = "There is nothing in your post!";
      }

      // check file input
      // first prepare file
      $this->prepareFile($file);
      // next check file , verify size and type
      if(!$this->checkFile(10000000, $this->allowed_files)) {
        $data['file_err'] = "There was a problem with you file upload!";
      }

      // check for any errors before moving data to model to create post
      if(empty($data['title_err']) && empty($data['body_err']) && empty($data['file_err'])) {
        // Rename file and assign its name to $data['file']
        $this->renameFile();
        $data['file'] = $this->newname;
        // call createPost method in post
        if($this->postModel->createPost($data)) {
          $this->moveFile();
          $_SESSION['msg'] = "Your post was added successfully";
          $_SESSION['msgClass'] = "success";
          redirect( "/posts/index");
        } else {
          $_SESSION['msg'] = "There was an error :(";
          $_SESSION['msgClass'] = "danger";
          redirect( "/posts/index");
        }
      }

    } else {

    }

    $this->view("posts/create",$data);
  }

  public function show($id) {
    $data = $this->postModel->getPost($id);
    //$post = $this->postModel->getPost($id);
    $this->view('posts/show', $data);
  }
  public function edit($id)
  {
    $this->post = $this->postModel->getPost($id);
    if (SESSION::get('user_id') != $this->post['user_id'] ) {
      die ("There was an error");
    }else {
      if($_SERVER['REQUEST_METHOD'] =='POST'){
        $_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $data = [
          'title' =>trim($_POST['title']),
          'body' => trim($_POST['body']),
          'id' => $this->post['id'],
          'title_err' => '',
          'body_err' => ''
        ];
        // check input title
        if(empty($data['title'])) {
          $data['title_err'] = "You must add a title to the post!";
        }
        // check input body
        if(empty($data['body'])) {
          $data['body_err'] = "There is nothing in your post!";
        }
        if(empty($data['title_err']) && empty($data['body_err']) && empty($data['file_err'])) {
          if( $this->postModel->updatePost($data)){
            SESSION::set('msg', 'You successfully updated your post');
              SESSION::set('msgClass',success);
              redirect("/posts/show/".$this->post['id']);
          }else {
            die("Unsuccessfully tried to update DB :((( ");
          }

        }
      }else {
          $this->view('posts/edit', $this->post);
      }
    }
  }

  public function delete ($id)
  {
    $this->post = $this->postModel->getPost($id);
    if (SESSION::get('user_id') != $this->post['user_id'] ) {
      die ("There was an error");
    }
    else {
      if ( $this->postModel->deletePost($this->post['id'])){
        SESSION::set('msg', 'You successfully deleted your post');
        SESSION::set('msgClass',success);
        redirect("/posts/index");
    }else {
      die ("We could not delete post");
    }
    }
  }
}
