<?php

$menu = [
    "login" => "login.php",
    "register" => "register.php",
    "upload" => "upload.php",
    "home" => "index.php"
];

$menuHtml = "<ul>";

foreach ($menu as $key => $val) {
    $menuHtml .= '<li><a href="' . $val . '">' . $key . '</a></li>';
}
$menuHtml .= "</ul>";

echo $menuHtml;

?>