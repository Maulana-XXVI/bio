<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$sekolah = $_POST['sekolah'];
$kelas = $_POST['kelas'];
$blog = $_POST['blog'];
$karir = $_POST['karir'];
$motto = $_POST['motto'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_biodata SET 
            nama = '$nama', 
            alamat = '$alamat', 
            tempat_lahir = '$tempat_lahir', 
            tgl_lahir = '$tgl_lahir', 
            agama = '$agama', 
            email = '$email', 
            no_hp = '$no_hp', 
            sekolah = '$sekolah', 
            kelas = '$kelas', 
            blog = '$blog', 
            karir = '$karir', 
            motto = '$motto' WHERE id = '$id'";


//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>