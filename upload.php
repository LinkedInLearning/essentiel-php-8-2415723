<?php
    require_once(__DIR__ . '/partials/const.php');

    $title = "Upload";
    $h1 = "Page d'envoi de fichier'";
?>

<!-- Header -->
<?php
    require_once(__DIR__ . '/partials/header.php');
?>

<?php
    if (isset($_POST["submit"])) {
        $filesDir = './files/';
        $uploadfile = $filesDir . md5(uniqid()) . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            echo "Le fichier est valide.";
        }
    }
?>

<form action="upload.php" method="POST" enctype='multipart/form-data'>  
    <label>File</label>
    <input type="file" name="file" required>

    <input type="submit" id='submit' name="submit" value='valider'>
</form>

<!-- Footer -->
<?php
    require_once(__DIR__ . '/partials/footer.php');
?>