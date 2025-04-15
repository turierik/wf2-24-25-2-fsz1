<?php
    $avg = null;
    if ($_POST){
        $numbers = $_POST["numbers"];
        $nums = explode(',', $numbers);
        $avg = array_sum($nums) / count($nums);
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
    <form action="2.php" method="POST">
        <textarea name="numbers"><?= $numbers ?? "5,3,2,1,2" ?></textarea>
        <button>Küldés</button>
    </form>
    <?php if ($avg !== null): ?>
        Átlag: <?= $avg ?>
    <?php endif; ?>
</body>
</html>