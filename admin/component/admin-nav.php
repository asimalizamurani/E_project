<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>Admin home page</title>
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/user-table.css">

</head>

<?php

session_start();

if(!$_SESSION['admin']) {
    header("location: form/login.php");
}

?>

<body>
                                      <!-- Navigation Bar  -->
    <div class="navbar">
        <div class="nav-heading">
            <a href="../mystore.php"><h1>My Store</h1></a>
        </div>
        <div class="nav-right">
            <ul>
                <a href="#"><li>Hello <?php echo $_SESSION['admin'] ?> </li></a>
                <a href="form/logout.php"><li>Logout</li></a>
                <a href="#"><li>Userpanel</li></a>
            </ul>
        </div>
    </div>
