<?php
    $c = null;
    if ($_GET){
        $errors = [];

        $a = $_GET["a"] ?? "";
        $b = $_GET["b"] ?? "";

        if($a === ""){
            $errors["a"] = "Add meg az A-t!";
        } else if (filter_var($a, FILTER_VALIDATE_INT) === false){
            $errors["a"] = "A legyen egész szám!";
        }

        if($b === ""){
            $errors["b"] = "Add meg a B-t!";
        } else if (filter_var($b, FILTER_VALIDATE_INT) === false){
            $errors["b"] = "B legyen egész szám!";
        }

        if(count($errors) === 0)
            $c = $a + $b;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="GET">
        <!-- get: 1.php?a=3&b=5 -->
        a = <input type="number" name="a" value="<?= $a ?? 5 ?>"> <?= $errors["a"] ?? "" ?>  <br>
        b = <input type="number" name="b" value="<?= $b ?? 9 ?>"> <?= $errors["b"] ?? "" ?>  <br>
        <button>Add össze!</button><br>
    
        <?php if ($_GET && count($errors) === 0): ?>
            a + b = <?= $c ?>
        <?php endif; ?>
    </form>
</body>
</html>