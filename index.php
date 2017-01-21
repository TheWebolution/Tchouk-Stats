<?php
require "Models/classes.php";
require "Views/views.php";
$page = isset($_GET["p"]) ? $_GET["p"] : "home";
?>

<html>
<head>
<?php
RenderView("scripts");
RenderView("styles");
?>
</head>
</html>

<body>
    <?php new View("shared/topbar"); ?>
    <?php new View("shared/sidebar"); ?>

    <main class="<?php echo $page; ?> col-md-10 col-md-offset-2">
        <?php new View($page); ?>
    </main>
</body>
