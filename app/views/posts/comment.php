<?php
include APPROOT . "/views/inc/header.php";
 ?>

<div class="jumbotron" style="background: url(<?php echo URLROOT; ?>/images/<?php echo $data['post_image']; ?>)">
  <div class="container">
  <h1 style="color: #00ced1; font-family: 'Playfair Display', serif;">
<?php echo $data['post_title']; ?>
</h1>
<hr>
<p style="color: #00ced1; font-family: 'Playfair Display', serif;">
  <?php  if (SESSION::get('user_id') == $data['user_id'] ) : ?>
      <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id'];?>"><button type="button" class="btn btn-warning pull-left"><span class="glyphicon glyphicon-pencil"></span>Edit Post</button></a>
      <a href="<?php echo URLROOT ;?>/posts/delete/<?php echo $data['id'];?>"><button type="button" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span>Delete Post</button></a>
<?php  endif ?>
<hr>
<?php echo $data['post_body']; ?></p>
  </div>
  <div class="container">
    <form class="" action="<?php echo URLROOT; ?>/posts/comment" method="post">
      <div class="form-group">
        Comment: <textarea name="commentContent" rows="8" cols="80"></textarea> <br>
        <p class="help-block">Help text here.</p>
      </div>
      <div class="form-group">
        Name: <input type="text" name="name" ><br>
        <p class="help-block">Help text here.</p>
      </div>
      <button type="submit" class="btn-block btn-success pull-center" ><span class="glyphicon glyphicon-pencil"></span>Submit Comment></button>
</a>
    </form>
  </div>


</div>

  <div class="row">
    <ul>
  <?php
    foreach($data['comments'] as $comment): ?>
    <div class="col-md-4">
      <h2><?php echo $comment['comment_name']; ?></h2></a>
      <h3><?php echo $comment['comment_date']; ?></h3>
      <p><?php echo substr($comment['comment_body'], 0, 155); ?></p>

    </div>
  <?php endforeach ?>
    </ul>
  </div>

</div>


<?php
include APPROOT . "/views/inc/footer.php";
 ?>
