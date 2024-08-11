

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>

<div class="wrapper">
    <form action="login1.php" method="POST">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="username" required>
        <label>Enter Username</label>
      </div>
      <div class="input-field">
        <input type="password" name="userpassword" required>
        <label>Enter your password</label>
      </div>
      <!-- Try to work on this further -->
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
      </div>
    </form>
  </div>


</body>
</html>