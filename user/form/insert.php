

<?php

include '../Config.php';

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Number = $_POST['number'];

    // Later save the password into hash form
    // Hash the password
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);

    $Dup_Email = mysqli_query($con, "SELECT * FROM `tbluser` WHERE Email = '$Email'");
    $Dup_username = mysqli_query($con, "SELECT * FROM `tbluser` WHERE UserName = '$Name'");

    if (mysqli_num_rows($Dup_Email)) {
        echo "
        <script>
        alert('Email already exists');
        window.location.href = 'register.php';
        </script>
        ";
    }
    if (mysqli_num_rows($Dup_username)) {
        echo "
        <script>
        alert('Username already exists');
        window.location.href = 'register.php';
        </script>
        ";
    } else {
        mysqli_query($con, "INSERT INTO `tbluser`(`UserName`, `Email`, `Password`, `Number`) VALUES ('$Name','$Email','$hashed_password','$Number')");
        echo "
        <script>
        alert('Registered Successfully');
        window.location.href = 'login.php';
        </script>
        ";

    }

}

?>