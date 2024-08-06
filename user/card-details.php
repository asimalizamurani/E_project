

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


<div id='top-products'>
<form action='Insertcart.php' method='POST'>
<div class='product-details'>
    <div class='image imageCon'>
    <img class='img' src='../admin/product/$row[Pimage]' alt=''>
    <div class='lens'></div>
    
    </div>
    <div class='pcontents'>
        <h2>$row[PName]</h2>
        <p class='price'>$row[PPrice]</p>
        <input type='submit' name='addCart' class='cbtn' value='Add To Cart'>
        <p class='category'>Category: $row[PCategory] </p>
        <input type='hidden' name='PName' value='$row[PName]'>
                 <input type='hidden' name='PPrice' value='$row[PPrice]'>
                 <input type='number' name='PQuantity' class='qnt' min='1' value='' placeholder='1'>               
                   </div>

                   <div class='result'></div>

    </div>
    </div>
    </form>
    </div>
";
?>

<div id="card-detail-h2">
<h2>Top Products</h2>
</div>
<div class='related-cards'>
    <?php
    include 'Config.php';
    $Record = mysqli_query($con, "select * from tblproduct");
    while ($row = mysqli_fetch_array($Record)) {
        $check_page = $row['PCategory'];
        if ($check_page === 'Home') {

            echo "

       
            <a href='card-details.php?productId=$row[Id]'>
            <div class='top-cards'>
                <div class='card'>
                    <div class='img-section'>
                        <img src='../admin/product/$row[Pimage]' alt=''>
                    </div>
                    <div class='card-contents'>
                        <h4>$row[PName]</h4>
                        <div class='card-center-content'>
                            <p>RS: $row[PPrice]</p>
                            
                        </div>
                        <div class='cart-btn'>
                            <input type='submit' name='addCart' class='add-btn' value='See More'>
                        </div>
                    </div>
                </div>
                </div>
                </a>
          
            ";

        }
    }
    ?>
</div>


<script src="./JS/index.js"></script>

<script src="./JS/imghover.js"></script>
        
<?php
include './component/footer.php';
?>