<?php
$title='Admin';
require_once 'functions.php';
session_start();
if (($_SESSION['isConnected'])!==true) {
    redirect('index.php');
}
require_once 'layout/header.php';


echo "Congrats you're on the admin page. Nothing to do there though.";














require_once 'layout/footer.php';