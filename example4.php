<?php
$password_plana = "1234";
$password_hash = password_hash($password_plana, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuaris (username, password) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['admin', $password_hash]);

$sql = "SELECT password FROM usuaris WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);

$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    echo "Login correcte";
} else {
    echo "Usuari o contrassenya incorrectes";
}
