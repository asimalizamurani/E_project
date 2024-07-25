
<?php
session_start();
// session_destroy();

if(isset($_SESSION['user'])) {


$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quantity = $_POST['PQuantity'];

// Assuming you have access to the submitted PQuantity value
// $quantity = $_POST['PQuantity'];

if (empty($product_quantity)) {
    $product_quantity = 1;
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if(isset($_POST['addCart'])) {
$check_product = array_column( $_SESSION['cart'],'productName');
    if(in_array($product_name, $check_product)) {
        echo "
        <script>
        alert('Product already added to the cart');
        window.location.href = 'index.php';
        </script>
        ";
    } 
    
    else {

        $_SESSION['cart'][] =array('productName' => $product_name,
         'productPrice' => $product_price,
         'productQuantity' => $product_quantity);
    
        //  print_r($_SESSION['cart']);
        header("location: viewCart.php");
    }

}

        // Remove Product // start here
        
        if(isset($_POST['remove'])) {
           foreach($_SESSION['cart'] as $key => $value) {
            if($value['productName'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location: viewCart.php');
            }
           }
        }

        // Remove Product // end here


        // Update Product // start here

        if(isset($_POST['update'])) {
            foreach($_SESSION['cart'] as $key => $value) {
             if($value['productName'] === $_POST['item']) {
                $_SESSION['cart'][$key] = array('productName' => $product_name,
                'productPrice' => $product_price,
                'productQuantity' => $product_quantity);
               header("location: viewCart.php");
             }
            }
         }

        }

        // Update Product // end here

        else {
            header("location: ./form/login.php");
        }

        
?>