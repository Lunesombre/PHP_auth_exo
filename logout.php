<?php
$title="Log out";
require_once 'functions.php';
session_start();
$_SESSION =[];
session_destroy();
redirect('index.php');

// var_dump($_SESSION);






























require_once 'layout/footer.php';