<?php
session_start();
require_once 'functions.php';
require_once 'classes/ConnexionMessage.php';

if (empty($_POST) || !isset($_POST['userName']) || !isset($_POST['password'])) {
  redirect('index.php');
}

require_once __DIR__ . '/db/pdo.php';

$login = $_POST['userName'];
$password = $_POST['password']; // mot de passe saisi par l'utilisateur

$query = "SELECT pass FROM users WHERE login=:pseudo";
$stmt = $pdo->prepare($query);
$stmt->execute(['pseudo' => $login]);

$user = $stmt->fetch();

if ($user === false) {
  redirect('login.php?msg=' . ConnexionMessages::INVALID_USER);
}

$hashedPassword = $user['pass'];
if (password_verify($password, $hashedPassword) === false) {
  redirect('login.php?msg=' . ConnexionMessages::INVALID_USER);
}

$_SESSION['isConnected'] = true;
redirect('index.php?msg=' . ConnexionMessages::CONNEXION_IS_VALID);
