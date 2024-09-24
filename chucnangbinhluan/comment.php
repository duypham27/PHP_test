<?php

    include('config/connect.php');

    $id_prd = $_GET['id_prd'];

    // Lấy tên sản phẩm
    $getname = "SELECT name_prd FROM product WHERE id_prd='$id_prd' ";
    
    $truyvan = mysqli_query($conn, $getname); 

    $name_prd = mysqli_fetch_array($truyvan)['name_prd'];

    echo $name_prd;

    // Lấy nội dung bình luận của sản phẩm đó
    $sql = "SELECT name, text_comm 
            FROM comment INNER JOIN product INNER JOIN member ON
            comment.id_prd=product.id_prd AND comment.user=member.user
            WHERE name_prd LIKE '%$name_prd%' 
            ORDER BY id_comm DESC LIMIT 0,5";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    { ?>
        <br>
        <?php echo $row['text_comm'] ?>

    <?php } ?>

    <form action="add_comment.php?id_prd=<?php echo $id_prd ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="text">
        <button type="submit">Bình Luận</button>
    </form>