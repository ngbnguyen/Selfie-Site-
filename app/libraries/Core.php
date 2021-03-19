<?php
/*
* App Core Class
* Creates URL and loads core Controller
* Url format - /controller/method/params
*/

class Core {
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct(){
    // get URL and use it to choose contoller and methods
    $url = $this->getUrl();
    //looks in app/controller to see if controller exists
    if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      //if the contoller exists set to current controllers
      $this->currentController = ucwords($url[0]);
      unset($url[0]);

    }
    //require controller
    require_once '../app/controllers/' . $this->currentController . '.php';
    // instantiate controller
    $this->currentController = new $this->currentController;

    //check for second part of url
    if(isset($url[1])) {

      if(method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
      }
    }
    //get $params
    $this->params = $url ? array_values($url) : [];
    // call back if array has $params
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }

  public function getUrl(){
    if(isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode("/", $url);
      return $url;
    }
  }
}
