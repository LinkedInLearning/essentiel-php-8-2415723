<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?php echo (isset($title)) ?  $title : "Mon site"; ?></title>
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
<div class="content">
    <h1><?php echo (isset($h1)) ?  $h1 : "Mon site"; ?></h1>
    <?php
      require_once(__DIR__ . '/menu.php');
    ?>
</div>