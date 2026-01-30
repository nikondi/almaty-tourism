<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $title ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght,CRSV@100..900,0&display=swap" rel="stylesheet">

    <link href="/assets/fonts/artifaktelement/stylesheet.css" rel="stylesheet">
</head>
<body>
<?php include 'partials/header.php'; ?>


<?= $content ?>

<?php include 'partials/footer.php'; ?>



<?php // TODO: Remove on production ?>
<!-- vite scripts for develop -->
<?= vite(['resources/js/app.ts', 'resources/css/app.scss']) ?>
<!-- vite scripts for develop -->

</body>
</html>