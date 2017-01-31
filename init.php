<?php
function CheckUser() {
    global $Page;
    global $User;
    global $Root;

    $sections = explode("/", $Page);
    if ($sections[0] === "admin" && !$User->logged) {
        header('Location: ' . $Root . 'home');
    }
}

session_start();
$Page = isset($_GET["p"]) ? $_GET["p"] : "home";
$UrlSections = explode("/", $Page);
$PageName = $UrlSections[0];
$Root = "";

for ($i = 1; $i < count($UrlSections); $i++) {
    $Root .= "../";
}

$IsUserControlActive = true;
if ($IsUserControlActive) {
    $User = new User($_SESSION["username"], $_SESSION["password"]);
    CheckUser();
}
?>
