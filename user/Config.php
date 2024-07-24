
<?php

$con = mysqli_connect("localhost", 'root', '', 'ecommerce');

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