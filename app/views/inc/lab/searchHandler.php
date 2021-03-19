<?php
include "config/config.php";
echo "AJAX request received!";
if(isset($_POST)) {
  if(empty($_POST['request'])) {
    $blog = new Blog();
    $blog->getBlogs();
    $blog->outputBlogs();
    $blog->getPager();
  } else {
  $blogsearch = new Blog();
  echo "Post request received!<br>";
  echo "You requested: " . $_POST['request'];
  $blogsearch->blogSearch($_POST['request']);
  $blogsearch->outputBlogs();
  }
}
 ?>
