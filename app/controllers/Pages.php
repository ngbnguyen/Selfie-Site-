<?php

class Pages extends Controller {

  use Greet;

  public function __construct() {

  }
  public function index() {
    // uses parent controller class to instantiate the postModel so we can
    // query the database and return posts which we then pass to the data assoc array
    $this->postModel = $this->model('Post');
    $posts = $this->postModel->getPosts();
    $greeting = $this->sayHi();
    $data = [
              "title" => $greeting,
              "posts" => $posts
            ];
    $this->view("pages/index", $data);
  }
  public function about($id = null) {
    $data = ['title' => 'Welcome to About'];
    $this->view("pages/about", $data);
  }
}
?>
