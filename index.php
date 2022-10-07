<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'timesheet';
    $action = 'timesheet';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller = ".$controller.", action = ".$action.""?>
        <?php require_once("./routes.php");?>
    </body>
</html>