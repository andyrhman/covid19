<?php

function validateTest($post)
{
    $errors = array();

    // count(array($errors));

    if (empty($post['nomor_telepon'])) {
        array_push($errors, 'Nomor telepon diperlukan!');
    }

    if (empty($post['tanggal_lahir'])) {
        array_push($errors, 'Tanggal lahir diperlukan!');
    }

    if (empty($post['email'])) {
        array_push($errors, 'Email diperlukan!');
    }

    if (empty($post['nomor_ktp'])) {
        array_push($errors, 'Nomor KTP diperlukan!');
    }

    if (empty($post['alamat'])) {
        array_push($errors, 'Alamat diperlukan!');
    }

    if (empty($post['asal'])) {
        array_push($errors, 'Kota/Kabupaten asal diperlukan!');
    }

    if (empty($post['tipe_tes'])) {
        array_push($errors, 'Tipe Tes diperlukan!');
    }



    return $errors;
}

