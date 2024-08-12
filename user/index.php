
<?php
include './component/header.php';
?>

    <div id="main">

    <!-- Video Section -->
    <div id="video-section">
        <div id="contents">
            <h2>Elevate your style with exquisite jewelry. Perfect for every occasion.</h2>
        </div>
        <video src="video/bgvideo.mp4" muted autoplay loop></video>

        <!-- cursor -->
         <div id='cursor'></div>
    </div>

    <!-- Logo section may be i'll be adding it for further -->
    <!-- <div id="logo-section">
        <div class="logos">
        <img src="logos/logo1.jpg" alt="">
        </div>
        <div class="logos">
        <img src="logos/logo2.jpg" alt="">
        </div>
        <div class="logos">
        <img src="logos/logo3.jpg" alt="">
        </div>
        <div class="logos">
        <img src="logos/logo4.jpg" alt="">
        </div>
        <div class="logos">
        <img src="logos/logo5.jpg" alt="">
        </div>
        <div class="logos">
        <img src="logos/logo6.png" alt="">
        </div>

    </div> -->

    <!-- Card Section -->
    <div class='card-section'>
        <div class="card-heading">
        <h2>Top Products</h2>
    </div>
   


        <!-- second one -->
        <div class="cards">
    <?php
    include 'Config.php';
    $Record = mysqli_query($con, "select * from tblproduct");
    while ($row = mysqli_fetch_array($Record)) {
        $check_page = $row['PCategory'];
        if ($check_page === 'Home') {

            echo "
            <a href='card-details.php?productId=$row[Id]'>
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
            </a>
            ";

        }
    }
    ?>
</div>


    </div>

    <!-- Banner -->
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70%</span> -All Necklace & EarRings</h2>
        <a href="necklace.php"><button class="embtn">Explore More</button></a>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="email" placeholder="Your email address">
            <a href="form/register.php">Sign Up</a>
        </div>
    </section>

    <?php include './component/footer.php'; ?>
    </div>

    <script src="./JS/index.js"></script>

