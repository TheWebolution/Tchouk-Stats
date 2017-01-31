<?php
require "Models/classes.php";
require "Views/views.php";
require "init.php";
?>

<html>

<?php RenderView("shared/head"); ?>

<body class="<?php echo $Page; ?>">
    <?php RenderView($Page); ?>
</body>
</html>
