<?php

 class Controller {
   
   public function model($model) {
     //require model file
     require_once '../app/models/' . $model . '.php';
     return new $model();
   }

   //load viewport
   public function view($view, $data = []) {
     // check for view file
     if(file_exists('../app/views/' . $view . '.php')) {
       require_once('../app/views/' . $view . '.php');
     } else {
       die('View does not exist');
     }
   }
 }
