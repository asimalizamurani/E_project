
<?php
include "../component/admin-nav.php";
?>

<link rel="stylesheet" href="user-table.css">

<div class="user-container">

<table id="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include 'Config.php';
            $Record = mysqli_query($con, "SELECT * FROM `tbluser`");
            $total_rows = mysqli_num_rows($Record);

            while($row = mysqli_fetch_array($Record))

            echo"
            <tr>
            <td>$row[Id]</td>
            <td>$row[UserName]</td>
            <td>$row[Email]</td>
            <td>$row[Number]</td>
            <td name='remove' class='delete-btn'><a href='delete.php?id={$row['Id']}'>Delete</a></td>
        </tr>
            ";
            ?>
        </tbody>
    </table>

    <div class="total-users">
        <h1>Total Users</h1>
        <h2><?php echo $total_rows;?></h2>
    </div>

    </div>