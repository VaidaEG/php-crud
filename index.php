<?php
require __DIR__ . '/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Bannana boxes</h1>
    <a href="<?= URL ?>create.php">Create</a>
    <a href="<?= URL ?>index.php">Home</a>
    <ul>
    <?php foreach (readData() as $box) : ?>
        <li>
        <span>ID: <?= $box['id'] ?></span>
        <span>Count: <?= $box['bannana'] ?></span>
        <button type="submit"><a style="text-decoration: none; color: black;" href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a></button>
        <form action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
        <button type="submit">DELETE</button>
        </form>
        </li>
    <?php endforeach ?>
    </ul>
</body>
</html>