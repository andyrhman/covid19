<?php

include(ROOT_PATH . "/db.php");
include(ROOT_PATH . "/app/helpers/validateTest.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'testing'; //kode serbaguna


$errors = array();

$id = '';
$nomor_telepon = ''; // Berfungsi menyimpan username terakhir di form agar tidak hilang
$email = ''; 
$tanggal_lahir = '';
$nomor_ktp = '';
$alamat = '';
$asal = '';
$tipe_tes = '';

if (isset($_POST['daftar-btn']) ) {
    // Cek adakah error 
    $errors = validateTest($_POST);

    if (count($errors) === 0) {
        unset($_POST['daftar-btn']);
        $_POST['id'] = $_SESSION['id'];
        $_POST['nomor_telepon'] = $_POST['nomor_telepon'];
        $_POST['tanggal_lahir'] = $_POST['tanggal_lahir'];
        $_POST['email'] = $_POST['email'];
        $_POST['nomor_ktp'] = $_POST['nomor_ktp'];
        $_POST['alamat'] = $_POST['alamat'];
        $_POST['asal'] = $_POST['asal'];
        $_POST['tipe_tes'] = $_POST['tipe_tes'];
        
    
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Anda Terdaftar";
        $_SESSION['type'] = "success";
        header('location: ' . BASE_URL . '/index.php');
        exit();
    } else{
        $nomor_telepon = $_POST['nomor_telepon']; // Berfungsi menyimpan username terakhir di form agar tidak hilang
        $email = $_POST['email']; 
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $nomor_ktp = $_POST['nomor_ktp'];
        $alamat = $_POST['alamat'];
        $asal = $_POST['asal'];
        $tipe_tes = $_POST['tipe_tes'];
    }

}