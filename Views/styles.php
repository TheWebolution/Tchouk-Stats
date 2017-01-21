<?php
$Styles = [
    "shared" => [
        "shared/bootstrap.min",
        "shared/font-awesome.min",
        "shared/topbar",
        "shared/sidebar",
        "shared/main"
    ]
];

function RenderStyles() {
    global $Section, $Styles;
    if (isset($Styles[$Section])) {
        foreach ($Styles[$Section] as $stylesheet) {
            echo '<link rel="stylesheet" href="Contents/Styles/' . $stylesheet . '.css">';
        }
    }
}

RenderStyles();
?>
