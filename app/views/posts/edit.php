
 <?php
 include APPROOT . "/views/inc/header.php";
  ?>
 <div class="jumbotron">

     <div class="col-md-6 col-md-offset-3">
       <h2>What are you thinking <?php echo Session::get("user_name"); ?>?</h2>
       <form class="" action="<?php echo URLROOT; ?>/posts/edit/<?php echo htmlspecialchars($data['id']); ?>" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="title">Title</label>
             <input type="text" value="<?php echo htmlspecialchars($data['post_title']); ?>"  class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" name="title" id="" placeholder="Write your post title                    here...">
             <p class="help-block"><?php echo (!empty($data['title_err'])) ? $data['title_err'] : ''; ?></p>
           </div>
           <div class="form-group">
             <label for="body">Post</label>
             <textarea name="body" id="editor" class="form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" rows="20" cols="80"><?php echo htmlspecialchars($data['post_body']); ?></textarea>
             <p class="help-block"><?php echo (!empty($data['body_err'])) ? $data['body_err'] : ''; ?></p>
           </div>
           <button type="submit" name="button" class="btn btn-block btn-success"><span class="glyphicon glyphicon-plus-sign"></span>Edit Post</button>
       </form>


   </div>

 </div>

 <script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
 <script type="text/javascript">
 ClassicEditor
         .create( document.querySelector('#editor'))
         .catch( error => {
             console.error( error );
         } );
 </script>
 <?php
 include APPROOT . "/views/inc/footer.php";
  ?>
