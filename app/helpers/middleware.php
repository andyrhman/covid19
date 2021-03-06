<?php 

function usersOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id'])) { // Jika user tidak login
        $_SESSION['message'] = 'Anda harus login dulu';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }

}

function adminOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) { // Jika user tidak login
        $_SESSION['message'] = 'Anda tidak di izinkan';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }

}

function guestsOnly($redirect = '/index.php')
{
    if (isset($_SESSION['id'])) { // Jika user tidak login
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}