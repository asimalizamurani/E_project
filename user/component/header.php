<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="../admin/design.css">
    <!-- <link rel="stylesheet" href="user.css"> -->
    <link rel="stylesheet" href="./css/homestyle.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/search.css">
    <!-- <link rel="stylesheet" href="./css/design.css"> -->

</head>
<body>

<?php
session_start();
$count = 0;

if(isset($_SESSION['cart'])) {
    // count is a php function which counts the number of cart items
$count = count($_SESSION['cart']);
}

?>
                                       <!-- Navigation Bar  -->
                                       <div class="navbar">
        <div class="nav-heading">
            <a href="index.php" id='main-title'><h1><span>B</span>SELLER</h1></a>
        </div>
        <div class="nav-right">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="viewCart.php"><li>Cart (<?php echo $count ?>)</li></a>
                <span class='nav-left-element'>
                <a href="#"><li>Hello
                     <?php 
                     if(isset($_SESSION['user'])){
                     echo $_SESSION['user'];
                     echo "
                     <a href='form/logout.php'><li>Logout</li></a>
                     ";
                     }
                     else {
                        echo "
                        <a href='form/login.php'><li>Login</li></a>
                        ";
                     }
                     ?>
                    </li></a>
                
                    <a href="#"><li>Admin</li></a>
                </span>
                <!-- Search section -->
                <form method="GET" action="search.php">
            <input type="text" id='search' name="query" placeholder="Search...">
            <input type="submit" id='search-btn' value="Search">
        </form>
        <!-- Search section ends here -->
            </ul>


        </div>
    </div>

    <div class='category-nav'>
        <ul>
            <li><a href="Gold.php">Gold</a></li>
            <li><a href="Silver.php">Silver</a></li>
            <li><a href="Perl.php">Pearl</a></li>
        </ul>
    </div>
    <!-- Searched prodects section -->
     <div class="searched-products">
        
     </div>


</body>
</html>