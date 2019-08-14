
<html>
    <head>
        <title>Server Is <?php echo $success?> </title>
    </head>
    <body>
        Which Server:<?php echo $server?> 
    </body>
</html>

<?php
    require 'lib/formval.php';
    require 'lib/runserver.php';


    $server= $_POST["game"];
    phpinfo();
?>

