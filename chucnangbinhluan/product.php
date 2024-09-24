<?php

    include ('config/connect.php');
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    { ?>
    <br>
    <?php echo $row['name_prd']; ?>

   <?php } ?>
?>