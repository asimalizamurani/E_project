
<?php 
     include './component/header.php';
     ?>

<div class='card-section'>
        <div class="card-heading">
        <h2>Silver Jewellry</h2>
    </div>
    <div class="cards">
        <?php
        include 'Config.php';
        $Record = mysqli_query($con, "select * from tblproduct");
        while ($row = mysqli_fetch_array($Record)) {
            $check_page = $row['PCategory'];
            if ($check_page === 'Silver') {



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
        }
        ?>
        </div>

    </div>

    <script src="./JS/index.js"></script>

<?php 
     include './component/footer.php';
     ?>