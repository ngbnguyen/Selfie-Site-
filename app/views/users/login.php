<?php
include APPROOT . "/views/inc/header.php";


 ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/login.css">

  <div class="login" >
  	<h1>Login</h1>
      <form method="post" action="<?php echo URLROOT; ?>/users/login" method="post">
        <label for="username">Username</label>
        <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id="" placeholder="User name..." name="name" value="<?php echo $data['name']; ?>">

        <p class="help-block uname"><?php
        echo $data['name_err']; ?></p>
        <label for="pw1">Password</label>
        <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="" placeholder="Password..." name="password" value="<?php echo $data['password']; ?>">
        <p class="help-block pw1"><?php
        echo $data['password_err']; ?></p>
          <button type="submit" class="btn btn-primary btn-block btn-large">Login.</button>
      </form>


</div>
