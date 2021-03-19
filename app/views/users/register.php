<?php
include APPROOT . "/views/inc/header.php";


 ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/login.css">
<div class="container">

  <div class="login" >
    <h1>Register</h1>
      <form class="register" action="<?php echo URLROOT; ?>/users/register" method="post">

          <label for="uname">User Name</label>
          <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id="" placeholder="User name..." name="name" value="<?php echo $data['name']; ?>">
          <p class="help-block uname"><?php
          echo $data['name_err']; ?></p>

          <label for="pw1">Password</label>
          <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="" placeholder="Password..." name="password" value="<?php echo $data['password']; ?>">
          <p class="help-block pw1"><?php
          echo $data['password_err']; ?></p>

          <label for="pw2">Reenter Password</label>
          <input type="password" class="form-control  <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" id="" placeholder="Reenter confirm_password..." name="confirm_password" value="<?php echo $data['confirm_password']; ?>">
          <p class="help-block pw2"><?php
          echo $data['confirm_password_err']; ?></p>

          <label for="email">User Email</label>
          <input type="email" class="form-control  <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="" placeholder="User email..." name="email" value="<?php echo $data['email']; ?>">
          <p class="help-block email"><?php
          echo $data['email_err']; ?></p>

        <button type="submit" name="register" class="btn btn-primary btn-block btn-large">Register</button>
    <div class="text-center">


          <a href="<?php echo URLROOT; ?>/users/login">Have an account? Login</a>

              </div>
      </form>

    </div>

  </div>
