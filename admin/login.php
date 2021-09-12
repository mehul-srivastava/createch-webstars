<?php
require 'assets/includes/functions.php';
if(isset($_POST['login'])) {
    login();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css" />
  <title id="title">User Login</title>
  <!--Favicon-->
  <link rel="icon" href="https://jstseguru.in/createch-webstars/assets/images/logo.png" />
  
</head>

<body>
  <section>
    <div class="container">

      <!--Login-->
      <div class="user signInBox">
        <div class="imgBox"><img src="https://jstseguru.in/createch-webstars/dashboard/assets/images/login.jpg" alt="login"></div>
        <div class="formBox" style="overflow-y: auto">
          <form action="" method="POST">
            <h2>CorsTech | Admin Log In</h2><br>
            <input type="email" name="email" placeholder="Email" required autocomplete="off" value="<?php echo isset($_POST['login']) && isset($_POST['email']) ? $_POST['email'] : null ?>" />
            <input type="password" name="password" placeholder="Password" required autocomplete="off" value="<?php echo isset($_POST['login']) && isset($_POST['password']) ? $_POST['password'] : null ?>" />
            <input type="submit" name="login" value="Login" /><br><br>
            <div class="error text-danger"><?php include('assets/includes/formErrors.php'); ?></div>
          </form>
        </div>
      </div>
    </div>  
  </section>
</body>

</html>