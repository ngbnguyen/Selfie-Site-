<?php
class Session {
  public static function get($key){
    return $_SESSION[$key];
  }

  public static function set($key, $val) {
    $_SESSION[$key] = $val;
  }

  public static function unset($key) {
    unset($_SESSION[$key]);
  }
}
