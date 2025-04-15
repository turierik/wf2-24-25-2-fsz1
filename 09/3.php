<?php
    if ($_POST){
        $fullname = trim($_POST["fullname"] ?? "");
        $age = trim($_POST["age"] ?? "");
        $eyecolor = trim($_POST["eyecolor"] ?? "");
        $accept = $_POST["accept"] ?? "";

        $errors = [];
        if ($fullname === ""){
            $errors["fullname"] = "A név nem lehet üres.";
        } else if (!str_contains($fullname, " ")){
            $errors["fullname"] = "A név 2 szó kell legyen.";
        }

        if($age === ""){
            $errors["age"] = "Az életkor nem lehet üres.";
        } else if (filter_var($age, FILTER_VALIDATE_INT) === false){
            $errors["age"] = "Az életkor egész szám kell legyen!";
        } else if ($age < 18){
            $errors["age"] = "Az életkor min. 18";
        }

        if ($eyecolor === ""){
            $errors["eyecolor"] = "A szem színét meg kell adni.";
        } else if ($eyecolor !== "blue" && $eyecolor !== "green" && $eyecolor !== "brown"){
            $errors["eyecolor"] = "A szemed színe érvénytelen.";
        }

        // HF: checkbox validációja
        // HF: select és checkbox állapottartása
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
    <form action="3.php" method="POST">
        Teljes név: <input type="text" name="fullname">
        <!-- Legalább 2 szóból áll (van benne szóköz) -->
        <br>

        Életkor: <input type="text" name="age">
        <!-- Egész szám, min 18 -->
        <br>

        Szemed színe: <select name="eyecolor">
            <option value="blue">Kék</option>
            <option value="green">Zöld</option>
            <option value="brown">Barna</option>
            <option value="black">Fekete</option>
        </select><br>
        <!-- Csak blue, green, brown -->
 
        <input type="checkbox" name="accept">Elfogadom a feltételeket.<br>
        <!-- Muszáj bejelölni -->

        <button>Küldés</button>
    </form>
</body>
</html>