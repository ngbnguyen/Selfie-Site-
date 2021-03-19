<?php
class Quote extends Controller{

  public function __construct() {
  }
  public function index() {
      $this->view("quote/quote");
  }
}
 ?>
