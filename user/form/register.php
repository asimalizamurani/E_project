<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
  <div class="wrapper">
    <form action="insert.php" method="POST">
      <h2>User Register</h2>
        <div class="input-field">
            <input type="text" name="name" required>
            <label>Enter Username</label>
      </div>
        <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="number" name="number" required>
        <label>Enter your number</label>
      </div>

      <!-- Try to add this functionality further -->
      <!-- <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div> -->
      <button name="submit" type="submit">Register</button>
      <div class="register">
        <p>Already have an account:  <a href="login.php" id="login-btn">Login</a></p>
      </div>
    </form>
  </div>

  <script src="../JS/formvalidate.js"></script>
</body>
</html>