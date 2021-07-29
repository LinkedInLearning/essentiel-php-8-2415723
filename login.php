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
    function isExist($login, $password) {
        $exist = false;

        $file = './files/users.csv';
        $row = 0;
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (($data[0] == $login) && ($data[1] == $password)) {
                    $exist = true;
                }
            }
            fclose($handle);
        }

        return $exist;
    }

    if (isset($_POST["submit"])) {
        if (strlen($_POST["email"] > 5) && strlen($_POST["password"] > 5)) {
            if (isExist($_POST["email"], $_POST["password"])) {
                $_SESSION['login'] = $_POST["email"];
                header('Location: ./index.php');
                exit;
            } else {
                echo "Erreur";
            }
        }
    }
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