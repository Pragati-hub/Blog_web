<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/dashboard.css">

  <!-- lora font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">
  <title>Register</title>

</head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <div class="auth-content">
    <form action="Register.php" method="post">
      <h2 class="form-title">Register</h2>
    
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
   

      <div> 
        <label>Username</label>
        <input type="text" name="username" value="<?php  echo $username; ?>" class="text-input">
      </div>
      <div>
      <label>Email</label>
      <input type="email" name="email" value="<?php  echo $email; ?>" class="text-input">
      </div>
      <div>
      <label>Password</label>
      <input type="password" name="password" value="<?php  echo $password; ?>" class="text-input">
      </div>
      <div>
  <label>Password Confirmation</label>
  <input type="password" name="passwordConf" value="<?php  echo $passwordConf; ?>" class="text-input">
  </div>
  <div>
    <button type="submit" name="register-btn" class="btn btn-big">Register</button>
    <p>Or<a href="<?php echo BASE_URL . 'login.php'?>">Sign In</a></p>
  </div>
</div>
</div>
  </form>
  </div>
  </div>




  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- custom script -->
  <script src="assets/js/script.js"></script>
</body>

</html>