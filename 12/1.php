<?php
    session_start();
    $x = $_SESSION['x'] ?? 0;
?>

Számláló: <?= $x ?>
<a href="pluszegy.php">Növel</a>