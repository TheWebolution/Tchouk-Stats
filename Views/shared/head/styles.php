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

function RenderStyles($Styles) {
    global $Page;
    global $Root;
    $allStyles = $Styles['shared'];

    if (isset($Styles[$Page])) {
        $allStyles = array_merge($Styles[$Page], $allStyles);
    }

    foreach ($allStyles as $stylesheet) {
        echo '<link rel="stylesheet" href="' . $Root . 'Contents/Styles/' . $stylesheet . '.css">';
    }
}

RenderStyles($Styles);
?>
