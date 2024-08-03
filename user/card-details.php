

<?php
include './component/header.php';

include 'Config.php';

// Get the product ID from the query parameter
$productId = $_GET['productId'];

// Fetch product details from the database
$query = "SELECT * FROM tblproduct WHERE Id = $productId";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// Display product details


echo "
<link rel='stylesheet' href='./css/product-details.css'>


<form action='Insertcart.php' method='POST'>
<div class='product-details'>
    <div class='image'>
    <img src='../admin/product/$row[Pimage]' alt=''>
    </div>
    <div class='pcontents'>
        <h2>$row[PName]</h2>
        <p class='price'>$row[PPrice]</p>
        <input type='submit' name='addCart' class='cbtn' value='Add To Cart'>
        <p class='category'>Category: $row[PCategory] </p>
        <input type='hidden' name='PName' value='$row[PName]'>
                 <input type='hidden' name='PPrice' value='$row[PPrice]'>
                 <input type='number' name='PQuantity' class='qnt' min='1' value='' placeholder='1'>                 </div>

                 
                 
    </div>
    </div>
    </form>
";
        

include './component/footer.php';
?>