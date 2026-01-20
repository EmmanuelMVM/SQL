<?php
require 'db.php';

$sql = "INSERT INTO equips 
(nombre, ciudad, estadio, anyo_fundacion, presidente, presupuesto)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'Real Madrid',
    'Madrid',
    'Santiago Bernabéu',
    1902,
    'Florentino Pérez',
    900000000
]);

