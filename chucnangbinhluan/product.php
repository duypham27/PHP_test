<h1>Products</h1>
<?php

    include ('config/connect.php');

    echo "<br>";

    $sql = "SELECT * FROM product";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    { ?>

        <a href="comment.php?id_prd=<?php echo $row['id_prd']; ?>">
            <?php echo $row['name_prd']; ?>
            <br>
        </a>

   <?php } ?>
