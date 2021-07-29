<?php
    require_once(__DIR__ . '/partials/const.php');

    $title = "Login";
    $h1 = "Page de login";
?>

<!-- Header -->
<?php
    require_once(__DIR__ . '/partials/header.php');
?>

<?php
    if (isset($_POST["submit"])) {
        var_dump($_POST);
        die();
    }
?>

<?php
    $value = "Mon premier Cookie PHP";
    setcookie("DemoCookie", $value, time()+3600);

    $value = "Ma session PHP";
    $_SESSION['DemoSession'] = $value;
    echo $_SESSION['DemoSession'];
?>

<form action="login.php" method="POST">  
    <label>Email</label>
    <input type="email" name="email" required>

    <label>Mot de passe</label>
    <input type="password" name="password" required>

    <input type="submit" id='submit' name="submit" value='valider'>
</form>

<!-- Footer -->
<?php
    require_once(__DIR__ . '/partials/footer.php');
?>