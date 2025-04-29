<?php
    include_once("Storage.php");
    $stor = new Storage(new JsonIO("data.json"));
    $data = $stor -> findAll();
?>

<table>
    <?php foreach($data as $id => $d): ?>
    <tr>
        <td><a href="5s.php?id=<?= $id ?>"><?= $d["fullname"] ?></a></td>
        <td><?= $d["age"] ?></td>
        <td><?= $d["eyecolor"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>