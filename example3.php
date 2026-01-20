<?php
require 'db.php';

$sql = "SELECT nombre, ciudad, estadio FROM equips";
$stmt = $pdo->query($sql);

$equips = $stmt->fetchAll();

foreach ($equips as $equip) {
    echo $equip['nombre'] . " - " . $equip['ciudad'] . "<br>";
}

