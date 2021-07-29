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
    $file = './files/data.csv';
    $row = 0;
    if (($handler = fopen($file, "r")) !== FALSE) {
        while (($data = fgetcsv($handler, 1000, ",")) !== FALSE) {
            if ($row > 0) {
                $num = count($data);
                echo "<p>Ligne $row: <br /></p>\n";
                for ($c=0; $c < $num; $c++) { 
                    echo $data[$c] . "<br />\n";
                }
            }
            $row++;
        }
    }

?>

<?php
    if (isset($_POST["submit"])) {
        var_dump($_FILES);
        die();
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