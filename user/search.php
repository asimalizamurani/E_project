
<?php

include "Config.php";
include './component/header.php';

// Get the search query
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Sanitize the search query to prevent SQL injection
$query = $con->real_escape_string($query);

// SQL query to search the database
$sql = "SELECT * FROM tblproduct WHERE PName LIKE '%$query%' OR PPrice LIKE '%$query%' OR PCategory LIKE '%$query%'";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
    <div id="searched-products">
    <h1>Search Results</h1>
    <div id="product-grid">
    <ul>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "<li>" . $row["PName"] . " - " . $row["PPrice"] . "</li>";
                // echo "<li><a href='product.php?id=" . $row["Id"] . "'>" . $row["PName"] . "</a> - " . $row["PPrice"] . "</li>";

                // The complete card
                echo "
               <form action='Insertcart.php' method='POST'>
                 <div class='card'>
                 <div class='img-section'>
                     <img src='../admin/product/$row[Pimage]' alt=''>
                     </div>
                     <div class='card-contents'>
                         <h4>$row[PName]</h4>
                         <div class='card-center-content'>
                         <p>RS: $row[PPrice]</p>
                         <input type='hidden' name='PName' value='$row[PName]'>
                         <input type='hidden' name='PPrice' value='$row[PPrice]'>
                         <input type='number'name='PQuantity' class='qnt' placeholder='1'>
                         </div>
                         <div class='cart-btn'>
                         <input type='submit' name='addCart' class='add-btn' value='Add To Cart'>
                         </div>
                     </div>
                 </div>
                 </form>
                 ";
                
            }
        } else {
            echo "<p id='ptext'>Product not found</p id='ptext'>";
        }

        $stmt = $con->prepare("SELECT * FROM tblproduct WHERE PName LIKE ? OR PPrice LIKE ?");
$search_term = "%" . $query . "%";
$stmt->bind_param("ss", $search_term, $search_term);
$stmt->execute();
$result = $stmt->get_result();



?>
    </ul>
    </div>
</div>

<?php

include './component/footer.php';

?>
