<?php
include APPROOT . "/views/inc/header.php";
 ?>

<div class="jumbotron" style="height:449px; background: url(<?php echo URLROOT; ?>/images/<?php echo $data['post_image']; ?>); width:100%; ">

</div>

<div class="container">
<h1 style="color: #00ced1; font-family: 'Playfair Display', serif;" class = "text-center">
<?php echo $data['post_title']; ?></h1>
<p style="color: #00ced1; font-family: 'Playfair Display', serif;" class = "text-center">
  <?php  if (Session::get('user_id') == $data['user_id'] ) : ?>
      <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id'];?>"><button type="button" class="btn btn-warning pull-left"><span class="glyphicon glyphicon-pencil"></span>Edit Post</button></a>
      <a href="<?php echo URLROOT ;?>/posts/delete/<?php echo $data['id'];?>"><button type="button" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span>Delete Post</button></a>
<?php  endif ?>
<hr>
<?php echo $data['post_body']; ?></p>
<div id="fb-root" style = "width: 250px;"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
<div class="fb-comments" data-href="http://localhost/itec_cs201/selfiesite/iteckymvc10/show<?php echo $data['id'];?>" data-width="" data-numposts="5"></div>
</div>




<?php
include APPROOT . "/views/inc/footer.php";
 ?>
