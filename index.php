<?php
require __DIR__ . '/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL . 'public/css/app.css' ?>">
    <title>CRUD</title>
</head>
<body>
    <div style="padding: 26px; border: 1px solid black; margin: 30px">
        <h1 style="text-align: center;">Bannana boxes</h1>
        <a href="<?= URL ?>create.php">Create</a>
        <a href="<?= URL ?>index.php">Home</a>
        <ul id="list">
        <?php foreach (readData() as $box) : ?>
            <li style="padding: 10px;">
            <span>ID: <?= $box['id'] ?></span>
            <span>Count: <?= $box['bannana'] ?></span>
            <a  class="btn btn-outline-success" href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
            <form style="display: inline-block;" action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
            <button style="display: inline-block"type="submit" class="btn btn-outline-danger">DELETE</button>
            </form>
            </li>
        <?php endforeach ?>
        </ul>
    </div>
    <!--  template for js data taking -->
    <div style="padding: 26px; border: 1px solid black; margin: 30px">
    Bannanas in box: <input style="margin-bottom: 20px;" type="text" id="count">
    <button class="btn btn-outline-info" type="button">CREATE</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script> const uriPath ="<?= URL ?>";</script>
    <script src="<?= URL ?>app.js" defer></script>
</body>
</html>