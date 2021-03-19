<?php
include APPROOT . "/views/inc/header.php";
 ?>

<div class="jumbotron">

    <div class="col-md-6 col-md-offset-3">
      <h1> Hi <?php echo Session::get('user_name'); ?></h1>
      <h2>Add your own post below.</h2>
      <form class="" action="<?php echo URLROOT; ?>/posts/search" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." name="search">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">Search!</button>
        </span>
      </div><!-- /input-group -->
    </form>
    <hr>
    <a href="<?php echo URLROOT; ?>/posts/create"><button class="btn btn-lg btn-block btn-primary"><i class="glyphicon glyphicon-pencil"></i>Create new post</button></a>

  </div>


</div>

<?php
include APPROOT . "/views/inc/footer.php";
 ?>
