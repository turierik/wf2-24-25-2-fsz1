<?php
    $id = $_GET["id"] ?? -1;
    //$data = json_decode(file_get_contents("data.json"), true);

    include_once("Storage.php");
    $stor = new Storage(new JsonIO("data.json"));
    $d = $stor -> findById($id);

    if ($d === NULL){
        header("location: 4.php");
        exit();
    }
?>

<h1><?= $id ?> ID-jű user adatai</h1>

Név: <?= $d["fullname"] ?><br>
Életkor: <?= $d["age"] ?><br>
Szem színe: <?= $d["eyecolor"] ?><br>