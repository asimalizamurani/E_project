

<?php 
include './component/header.php';
?>

<title>BSELLER.COM | Cart</title>

    <h1 id='c-heading'>My Cart</h1>

    <!-- start -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
               
                <?php

                $ptotal = 0;
                $total = 0;
                $i = 0;
                if(isset($_SESSION['cart'])) {
                    foreach($_SESSION['cart'] as $key => $value) {
                        $ptotal = intval($value['productPrice']) * intval($value['productQuantity']);
                        $total += intval($value['productPrice']) * intval($value['productQuantity']); $ptotal = intval($value['productPrice']) * intval($value['productQuantity']);
                        $i = $key +1;

                        echo "
                        <form action='Insertcart.php' method='POST'>
                        <tr>
                        <td>$i</td>
                        <td><input hidden type='text' name='PName' value='$value[productName]'>$value[productName]</td>
                        <td><input hidden type='text' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                        <td><input type='number' name='PQuantity' min='1' value='$value[productQuantity]'>$value[productQuantity]</td>
                        <td>$ptotal</td>
                        <td><button name='update' class='update-btn'>Update</button></td>
                        <td><button name='remove' class='delete-btn'>Delete</button></td>
                        <td><input hidden type='text' name='item' value='$value[productName]'></td>
                        </tr>
                        </form>

                        ";
                    }
                }

                // session_destroy();
                ?>
                <!-- Additional rows go here -->
            </tbody>
        </table>

        <div class="total-box">
            <h3>Total</h3>
            <h1> <?php echo number_format($total) ?> </h1>
        </div>
    </div>
    

     <!-- end -->

     <?php 
     include './component/footer.php';
     ?>