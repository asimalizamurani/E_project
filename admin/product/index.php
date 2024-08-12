<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link rel="stylesheet" href="../design.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>
<body>
    
<div class="product-form">
<form action="insert.php" method="POST" enctype="multipart/form-data" class="admin-form">
    <div class="form-section">
        <h2>Product Detail:</h2>
        <div class="form-fields">
        <label for="">Product Name:</label>
        <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="form-fields">
        <label for="">Product Price:</label>
        <input type="text" name="Pprice" class="form-control" placeholder="Product Price">
        </div>
        <div class="form-fields">
        <label for="">Add Product Image:</label>
        <input type="file" name="Pimage" class="form-control">
        </div>
        <div class="form-fields">
        <label for="">Select Product Category:</label>
        <select class="form-select" name="Pages">
            <option value="Home">Home</option>
            <option value="Gold">Gold</option>
            <option value="Silver">Silver</option>
            <option value="Perl">Perl</option>
        </select>
        </div>
        <button name="submit" class="form-control">Uploads</button>
    </div>
</form>
</div>

                           <!-- Fetch Data -->
  <div class="table-container">
      <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Category</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include 'Config.php';
            $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

            while($row = mysqli_fetch_array($Record))
            while($row = mysqli_fetch_array($Record)) {

            echo"
            <form action='update.php' method='GET'>
            <tr>
            <td>$row[Id]</td>
            <td>$row[PName]</td>
            <td>$row[PPrice]</td>
            <td><img src='$row[Pimage]' height= '90px' width= '100px'></td>
            <td>$row[PCategory]</td>
            <td name='remove' class='btn'><a href='delete.php?id={$row['Id']}'>Delete</a></td>
            <td class='btn'><a href='update.php? ID= $row[Id]'>Update</a></td>
        </tr>
            </form>
            ";
            }
            ?>
        </tbody>
        
    </table>
    </div>

</body>
</html>