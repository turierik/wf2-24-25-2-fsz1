<?php
    $data = json_decode(file_get_contents("data.json"), true);
?>

<table>
    <?php foreach($data as $id => $d): ?>
    <tr>
        <td><a href="5.php?id=<?= $id ?>"><?= $d["fullname"] ?></a></td>
        <td><?= $d["age"] ?></td>
        <td><?= $d["eyecolor"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>