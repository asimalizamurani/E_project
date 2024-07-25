
<?php

include "../Config.php";

if(isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];

    mysqli_query($con, "INSERT INTO `categories`(`name`) VALUES ('$category_name')");
}

?>