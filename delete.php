<?php
include 'connect.php';
$id = $_GET['id'];
if ($id != '') {
    $sql2 = "Delete from murid where id_mhs = '$id'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        echo "suksess";
        header("refresh:2;url=index.php");
    }
} else {
    echo "id null";
}



?>