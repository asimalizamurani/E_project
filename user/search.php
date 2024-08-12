
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
    <h1>Search Results</h1>
    
    <div class='related-cards'>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {

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
        } else {
            echo "<p id='ptext'>Product not found</p id='ptext'>";
        }

        $stmt = $con->prepare("SELECT * FROM tblproduct WHERE PName LIKE ? OR PPrice LIKE ?");
$search_term = "%" . $query . "%";
$stmt->bind_param("ss", $search_term, $search_term);
$stmt->execute();
$result = $stmt->get_result();



?>
</div>

<script src="./JS/index.js"></script>

<?php

include './component/footer.php';

?>