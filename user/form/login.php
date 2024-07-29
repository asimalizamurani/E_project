<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
  <div class="wrapper">
    <form action="login1.php" method="POST">
      <h2>User Login</h2>
        <div class="input-field">
            <input type="text" name="name">
            <label>Enter Username</label>
      </div>
      <div class="input-field">
        <input type="password" name="password">
        <label>Enter your password</label>
      </div>

      <!-- Try to add this functionality further -->
      <!-- <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div> -->
      <button name="submit" type="submit">Login</button>
      <div class="register">
        <p>Don't have an account?  <a href="register.php" id="login-btn">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>