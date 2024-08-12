

<?php
if (isset($_POST['update'])) {
    $id = $_POST['updateid'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];

    // Check if a new image has been uploaded
    include "Config.php";
    if ($_FILES['Pimage']['tmp_name']) {
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $img_des = "Uploadimage/" . $image_name;
        move_uploaded_file($image_loc, $img_des);
    } else {
        // If no new image is uploaded, use the existing image
        $query = "SELECT Pimage FROM tblproduct WHERE Id = $id";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $img_des = $row['Pimage'];
    }

    $product_category = $_POST['Pages'];

    include 'Config.php';

    $query = "UPDATE tblproduct SET PName='$product_name', PPrice='$product_price', Pimage='$img_des', PCategory='$product_category' WHERE Id = $id";
    if (!mysqli_query($con, $query)) {
        echo "Update failed: " . mysqli_error($con);
        exit;
    }
    header("Location: index.php");
}
?>
