<?php
require_once 'db/pdo.php';

$login = "Johnny";
$password = "bonjour";

$query = "INSERT INTO users VALUES (null, :pseudo, :pass)";

$stmt = $pdo->prepare($query);

$insert = $stmt->execute([
  'pseudo' => $login,
  'pass' => password_hash($password, PASSWORD_DEFAULT)
]);

if ($insert) {
  echo "Utilisateur enregistré";
} else {
  echo "Échec lors de l'insertion";
}
