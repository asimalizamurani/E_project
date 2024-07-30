<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>Admin home page</title>
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/user-table.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- <link rel="stylesheet" href="../css/category.css"> -->

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<?php

session_start();

if (!$_SESSION['admin']) {
    header("location: form/login.php");
}

?>

<body>
    <!-- Navigation Bar  -->
    <div class="admin-navbar">
    <div class="navbar">
        <div class="nav-heading">
            <a href="../mystore.php">
                <h1>My Store</h1>
            </a>
        </div>
        <div class="nav-right">
            <ul>
                <a href="#">
                    <li>Hello <?php echo $_SESSION['admin'] ?> </li>
                </a>
                <a href="form/login.php">
                    <li>Logout</li>
                </a>
                <a href="#">
                    <li>Userpanel</li>
                </a>
            </ul>
        </div>
        <i id="bar" class="fa-solid fa-bars"></i>
    </div>
    
    </div>

    <!-- Mobile phone sidebar -->
    <div class="admin-sidebar dnone">
    <div class="sidebar-contents">
            <ul>
                <a href="#">
                    <li>Hello <?php echo $_SESSION['admin'] ?> </li>
                </a>
                <a href="form/logout.php">
                    <li>Logout</li>
                </a>
                <a href="#">
                    <li>Userpanel</li>
                </a>
            </ul>
        </div>
        <i id="close" class="fa-solid fa-xmark"></i>
     </div>


     <script>
        const bar =document.querySelector('#bar');
        const adminSidebar =document.querySelector('.admin-sidebar');
        const close =document.querySelector('#close');

       if(bar) {
        bar.addEventListener('click', function() {
            adminSidebar.classList.remove('dnone');
        })
       }

       if(close) {
        close.addEventListener('click', function() {
            adminSidebar.classList.add('dnone');
        })
       }
       
     </script>
    