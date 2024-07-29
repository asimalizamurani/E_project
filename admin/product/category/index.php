

<!-- <?php
//  include ".././../component/admin-nav.php";
?> -->



    <title>Category Management</title>
    <link rel="stylesheet" href=".././../css/category.css">
    <link rel="stylesheet" href=".././../css/responsive.css">
    

    <h1>Category Management</h1>

    <div id="category-section">
    <form method="post" action="add_category.php">
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name" required>
        <button name="submit" type="submit">Add Category</button>
    </form>
    </div>

    <div id="category-table">
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
        while ($row = mysqli_fetch_array($result)) {
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
    </div>
</body>
</html>
