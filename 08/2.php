
<?php for($i = 8; $i < 25; $i++): ?>
    <p style="font-size:<?= $i ?>px">Hello világ!</p>
<?php endfor; ?>

<?php
    $lista = ["alma", "banán", "citrom", "datolya", "eper"];
    $tablazat = [[1, 2, 6], [7, 9, 13], [5, 6, 7], [0, 0, 7]];
?>

<!-- 2. feladat
 Generálj listát! -->
<ul>
    <?php foreach($lista as $elem): ?>
        <li> <?= $elem ?> </li>
    <?php endforeach; ?>
</ul>
 
<!-- 3. feladat
 Generálj táblázatot! -->
<table>
    <?php foreach($tablazat as $sor): ?>
    <tr>
        <?php foreach($sor as $cella): ?>
            <td><?= $cella ?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>


<!-- Fun fact: -->
<?= array_sum([1, 2, 6]) . "<br>" ?>
<?= max([1, 2, 6]) . "<br>" ?>
<?= min([1, 2, 6]) . "<br>" ?>