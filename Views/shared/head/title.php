<?php
$Titles = [
    "home" => "Tchouk Stats",
    "admin/new-player" => "Nuovo giocatore - Tchouk Stats"
];

function RenderTitle($Titles) {
    global $Page;

    $title = $Titles[$Page] !== null ? $Titles[$Page] : $Titles["home"];
    echo "<title>" . $title . "</title>";
}

RenderTitle($Titles);
?>
