<?php
require "Models/classes.php";
require "Views/views.php";
$Page = isset($_GET["p"]) ? $_GET["p"] : "home";
?>

<html>
<head>
    <title><?php echo $Page; ?></title>
<?php
RenderView("scripts");
RenderView("styles");
?>
</head>
</html>

<body>
    <main class="<?php echo $Page; ?> col-md-10 col-md-offset-2">
        <?php RenderView($Page); ?>
    </main>
</body>
