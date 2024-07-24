
<?php

include "Config.php";
include './component/header.php';

// Get the search query
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Sanitize the search query to prevent SQL injection
$query = $con->real_escape_string($query);

// SQL query to search the database
$sql = "SELECT * FROM tblproduct WHERE PName LIKE '%$query%' OR PPrice LIKE '%$query%'";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["PName"] . " - " . $row["PPrice"] . "</li>";
            }
        } else {
            echo "0 results";
        }

        $stmt = $con->prepare("SELECT * FROM tblproduct WHERE PName LIKE ? OR PPrice LIKE ?");
$search_term = "%" . $query . "%";
$stmt->bind_param("ss", $search_term, $search_term);
$stmt->execute();
$result = $stmt->get_result();


        ?>
    </ul>
</body>
</html>