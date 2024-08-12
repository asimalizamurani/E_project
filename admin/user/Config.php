

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
// else {
//     echo "
//     <script>
//     alert('Connected');
//     </script>
//     ";
// }

?>