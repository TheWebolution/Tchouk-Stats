<?php
$Titles = [
    "home" => "Tchouk Stats",
    "new-player" => "Nuovo giocatore - Tchouk Stats"
];

function RenderTitle($Titles) {
    global $Page;
    echo "<title>" . $Titles[$Page] . "</title>";
}

RenderTitle($Titles);
?>
