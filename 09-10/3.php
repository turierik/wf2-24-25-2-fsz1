<?php
    var_dump($_POST);

    $fullname = trim($_POST["fullname"] ?? "");
    $age = trim($_POST["age"] ?? "");
    $eyecolor = trim($_POST["eyecolor"] ?? "");
    $accept = $_POST["accept"] ?? "";

    if ($_POST){
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
        if ($accept !== "on")
            $errors["accept"] = "Be kell pipálni!";

        // HF: select és checkbox állapottartása - kész :)

        // mentsük el a fájlba!
        if (count($errors) === 0){
            // 1. be kéne olvasni, ami a fájlban van!
            $data = json_decode(file_get_contents("data.json"), true);
            // 2. rakjunk a $data végére egy új elemet az űrlap alapján
            $data[] = [
                "fullname" => $fullname,
                "age" => $age,
                "eyecolor" => $eyecolor
            ];
            // 3. írjuk vissza a fájlba a tömböt
            file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));
        }
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
        Teljes név: <input type="text" name="fullname" value="<?= $fullname ?? "" ?>">
        <!-- Legalább 2 szóból áll (van benne szóköz) -->
        <?= $errors["fullname"] ?? "" ?> <br>

        Életkor: <input type="text" name="age" value="<?= $age ?? 18 ?>">
        <!-- Egész szám, min 18 -->
        <?= $errors["age"] ?? "" ?> <br>

        Szemed színe: <select name="eyecolor">
            <option value="blue" <?= $eyecolor == "blue" ? "selected" : "" ?> >Kék</option>
            <option value="green" <?= $eyecolor == "green" ? "selected" : "" ?>>Zöld</option>
            <option value="brown" <?= $eyecolor == "brown" ? "selected" : "" ?>>Barna</option>
            <option value="black" <?= $eyecolor == "black" ? "selected" : "" ?>>Fekete</option>
        </select>
        <?= $errors["eyecolor"] ?? "" ?><br> 
        <!-- Csak blue, green, brown -->
 
        <input type="checkbox" name="accept" <?= $accept == "on" ? "checked" : "" ?>>Elfogadom a feltételeket.<br>
        <?= $errors["accept"] ?? "" ?><!-- Muszáj bejelölni -->

        <br><button>Küldés</button>
    </form>
</body>
</html>