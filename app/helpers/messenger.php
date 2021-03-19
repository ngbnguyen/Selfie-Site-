<?php

function flash() {
  if(isset($_SESSION['msg'])) {
    echo "<div class='alert alert-" . SESSION::get('msgClass') . "'>" . SESSION::get('msg') . " </div>";
    clearMsg();
  }
}

function clearMsg() {
  SESSION::unset("msg");
  SESSION::unset("msgClass");
}

function createMsg($msg, $msgClass) {
  SESSION::set('msg', $msg);
  SESSION::set('msgClass', $msgClass);
}

 ?>
