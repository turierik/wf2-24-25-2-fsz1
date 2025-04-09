<?php
    $x = 3;
    echo $x;
    echo($x);
    print $x;
    print($x);

    $t = [2, 4, 7, 9, 10];
    echo $t;

    $o = [
        "model" => "Tesla S",
        "year" => 2015
    ];
    echo $o["year"];

    // 1. feladat
    // $t-ből válogasd ki a páros számokat :)
    // a.) for ciklus, b.) valami okosabb

    function paros($n){
        return $n % 2 === 0;
    }
    $u = array_filter($t, "paros");
    echo "<br>";
    echo implode(", ", $u);

    $v = array_filter($t, fn($x) => $x % 2 === 0);
    echo "<br>";
    echo implode(", ", $v);

    // 2. feladat
    // a.) for ciklus b.) okosan :)
    // $t tömb négyzete

    $w = [];
    for ($i = 0; $i < count($t); $i++)
        $w[] = $t[$i] * $t[$i];
    echo "<br>";
    echo implode(", ", $w);

    $y = array_map(fn($x) => $x * $x, $t);
    echo "<br>";
    echo implode(", ", $y);
?>