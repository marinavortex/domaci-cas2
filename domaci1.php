<?php

$nazivSajta = "Postani Programer";

$navigacija = ["Glavna", "O nama", "Kontakt"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?= $nazivSajta ?>  </title>
</head>
<body>
    <h1> <?= $nazivSajta; ?> </h1>
    <nav>
        <a><?= $navigacija[0]; ?> </a>
        <a><?= $navigacija[1]; ?> </a>
        <a><?= $navigacija[2]; ?> </a>
    </nav>
</body>
</html>