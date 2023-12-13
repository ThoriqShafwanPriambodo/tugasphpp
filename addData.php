<?php 
include 'connect.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$idWali = $_POST['id_wali'];

$sql2 = "Insert into murid (nim,nama,jenis_kelamin,jurusan,alamat,id_wali) values ('$nim','$nama','$jenis_kelamin','$jurusan','$alamat','$idWali')";
$query2 = mysqli_query($conn, $sql2);
if ($query2) {
    echo "suksess";
    header("refresh:2;url=index.php");
}
?>