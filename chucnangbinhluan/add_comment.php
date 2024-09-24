<?php

    include('config/connect.php');

    $id_prd = $_GET['id_prd'];

    echo $id_prd;

    $text = $_POST['text'];
    echo $text;

    $sql = "INSERT INTO comment(id_comm, text_comm, id_prd, user)
            VALUES(NULL , '$text', '$id_prd', 'tranvanthuong') ";

    mysqli_query($conn, $sql);

    header("location:comment.php?id_prd=$id_prd")
?>