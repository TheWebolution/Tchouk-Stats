<?php
$Scripts = [
    "shared" => [
        "shared/jquery.min",
        "shared/bootstrap.min"
    ]
];

function RenderScripts() {
    global $Section, $Scripts;
    if (isset($Scripts[$Section])) {
        foreach ($Scripts[$Section] as $script) {
            echo '<script type="text/javascript" src="Contents/Scripts/' . $script . '.js"></script>';
        }
    }
}

RenderScripts();
?>
