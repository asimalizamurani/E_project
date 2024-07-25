

<?php

include "Config.php";
$id = $_GET['id'];

$query = mysqli_query($con, "DELETE FROM `tbluser` WHERE Id = $id");

if($query) {
    echo "
    <script>
    alert('User deleted successfully');
    </script>
    ";
    header("location: index.php");
} else {
 echo "
    <script>
    alert('Failed to delete user');
    </script>
    ";
}

?>