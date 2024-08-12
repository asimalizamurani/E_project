
 <?php

include '../Config.php';

// $Name = $_POST['name'];
$Name = strtolower($_POST['name']);
$Password = $_POST['password'];

// Hash the password before storing it in the database

$hashed_password = password_hash($Password, PASSWORD_DEFAULT);

// taking the username and password from the form data and storing them into query variable
$query = "SELECT * FROM `tbluser` WHERE LOWER(UserName) = '$Name' OR LOWER(Email) = '$Name' AND Password = '$hashed_password'";

$result = mysqli_query($con, $query);

// Verifying the hashed_password to check input password matches to the database password or not

// Starting the session
session_start();

$hashed_password = mysqli_fetch_assoc($result)['Password']; // Assuming 'Password' is the hashed password column
if (password_verify($Password, $hashed_password)) {

    $_SESSION['user'] = $Name;

    // Login successful (hashed passwords match)
    echo "
    <script>
    alert('Logged in Successfully');
    window.location.href = '../index.php';
    </script>
    ";
} 
else {
    // Login failed (password doesn't match)
    echo "<script>alert('Invalid username/email or password');
    window.location.href = 'login.php';
    </script>";
}

// Prepared statement for secure login to avoid sql injection
$stmt = mysqli_prepare($con, "SELECT * FROM `tbluser` WHERE UserName = ? OR Email = ? AND Password = ?");
mysqli_stmt_bind_param($stmt, "sss", $Name, $Name, $hashed_password); // Bind parameters
mysqli_stmt_execute($stmt); // Execute the prepared statement
$result = mysqli_stmt_get_result($stmt);

?>