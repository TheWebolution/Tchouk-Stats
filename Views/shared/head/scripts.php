<?php
$Scripts = [
    "shared" => [
        "shared/jquery.min",
        "shared/bootstrap.min"
    ]
];

function RenderScripts($Scripts) {
    global $Page;
    global $Root;
    $allScripts = $Scripts['shared'];

    if (isset($Scripts[$Page])) {
        $allScripts = array_merge($Scripts[$Page], $allScripts);
    }

    foreach ($allScripts as $script) {
        echo '<script type="text/javascript" src="' . $Root . 'Contents/Scripts/' . $script . '.js"></script>';
    }
}

RenderScripts($Scripts);
?>
