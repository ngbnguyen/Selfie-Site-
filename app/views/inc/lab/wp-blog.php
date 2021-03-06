<?php
  include 'config/config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Iteky Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="wp-blog.php">WP Blog</a></li>

          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" name="search" placeholder="Search">
            </div>
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="jumbotron">
      <div class="container">


      <h1>Welcome to WP Blog</h1>
      <p>Search our Blogs below.</p>
      <form class="" action="wp-search.php" method="post">
        <div class="form-group">
          <label for=""></label>
          <input type="text" class="form-control" id="search" placeholder="">
          <p class="help-block">Help text here.</p>
        </div>
        <button type="submit" name="search" class="btn btn-primary">Search</button>
      </form>
      </div>
    </div>

    <div class="container output">

      <?php
        $page = 0;
        if(isset($_GET['page'])) {
          $page = $_GET['page'];
          echo "Get request received: {$page}.";
        }
        $blog = new Blog($page);
        $blog->getBlogs();
        $blog->outputBlogs();
        $blog->getPager();
       ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    let searchbar = document.querySelector("#search");
    searchbar.addEventListener("keyup", function() {
     let xhr = new XMLHttpRequest;
     let request = "request=" + searchbar.value;
     xhr.open("get", "searchHandler.php?q=Spencer Austin Martin", true);
     /*xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
*/
     xhr.onload = function() {
       console.log(this.responseText);

       $(".output").html(this.responseText).fadeIn(400);

   }

     xhr.send();
    })
  })
</script>
  </body>
</html>
