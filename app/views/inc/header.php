<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sefly Site</title>
    <!-- link CSS -->
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Baskervville|Roboto&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #69BCF4">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URLROOT?>/pages" style="font-family: 'Playfair Display', serif"><span class="glyphicon glyphicon-grain"></span><?php echo SITENAME; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?php echo URLROOT;?>/pages">HOME</a></li>
            <li class=""><a href="<?php echo URLROOT;?>/Aboutme">ABOUT </a></li>
            <li class=""><a href="<?php echo URLROOT;?>/skill">MY SKILL</a></li>
            <li class=""><a href="<?php echo URLROOT;?>/edu">EDUCATION</a></li>
            <li class=""><a href="<?php echo URLROOT;?>/quote">QUOTES</a></li>
            <li class=""><a href="<?php echo URLROOT;?>/contact">CONTACT</a></li>
            <li class=""><a href="<?php echo URLROOT;?>/blog">BLOG</a></li>
          <li><a href="<?php echo URLROOT;?>/posts">Posts</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
          
          </form>
          <ul class="nav navbar-nav navbar-right">
            <?php
            // check if logged in, include log/register or user
              if(SESSION::get('loggedin') == false) {
                include APPROOT . "/views/inc/loggedout.php";
              } else {
                include APPROOT . "/views/inc/loggedin.php";
              }
             ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container flash">
  <?php
  flash();
   ?>
    </div>
