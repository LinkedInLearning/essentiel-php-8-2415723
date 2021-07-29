<?php

$menu = [
    "login" => "login.php",
    "register" => "register.php",
    "upload" => "upload.php",
    "home" => "index.php"
];

$menuHtml = "<ul>";

foreach ($menu as $key => $val) {
    if (
        (isset($_SESSION['login']) && ($key != 'login') && ($key != 'register'))
         || 
         (!isset($_SESSION['login']) && ($key != 'upload'))
         ) {
        $menuHtml .= '<li><a href="' . $val . '">' . $key . '</a></li>';
    }
}
$menuHtml .= "</ul>";

echo $menuHtml;

?>