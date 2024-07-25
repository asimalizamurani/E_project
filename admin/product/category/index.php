<!DOCTYPE html>
<html>
<head>
    <title>Category Management</title>
</head>
<body>
    <h1>Category Management</h1>

    <form method="post" action="add_category.php">
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" required>
        <button name="submit" type="submit">Add Category</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <!-- <th>Actions</th> -->
            </tr>
        </thead>

        <?php
        include "../Config.php";
        $query = "SELECT * FROM `categories`";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)); {
        echo "
        <tbody>
         <tr>
                <th>$row[id]</th>
                <th>$row[name]</th>
               
            </tr>
            </tbody>
";
        }
            ?>
    </table>
</body>
</html>
