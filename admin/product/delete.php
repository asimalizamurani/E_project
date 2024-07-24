

<?php
include('Config.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch the product image path to delete the image file
    $stmt = mysqli_prepare($con, "SELECT `Pimage` FROM `tblproduct` WHERE Id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result)) {
        $imagePath = $row['Pimage'];
        
        // Delete the product record from the database
        $deleteStmt = mysqli_prepare($con, "DELETE FROM `tblproduct` WHERE Id = ?");
        mysqli_stmt_bind_param($deleteStmt, "i", $id);
        mysqli_stmt_execute($deleteStmt);

        if (mysqli_stmt_affected_rows($deleteStmt) > 0) {
            // Delete the image file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            header("Location: index.php");
            exit();
        } else {
            echo "Error deleting record.";
        }

        mysqli_stmt_close($deleteStmt);
    } else {
        echo "Product not found.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Invalid product ID.";
}

mysqli_close($con);
?>