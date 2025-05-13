<?php
    session_start();
    $_SESSION['x'] = ($_SESSION['x'] ?? 0) + 1;
    header("location: 1.php");
?>