

<html>
    <head>
    </head>
    <body>
        <p>
            Server is: <?php #echo shell_exec("cd /home/saggins/Documents/projects/minecraft-test && sh ./startserver.sh 2>&1"); ?>
            
        </p>
        
    </body>
</html>

<?php
    require("lib/runserver.php");
    #secho shell_exec("cd /home/saggins/Documents/projects/sangminchun.info/ | sh ./testscript.sh 2>&1");
    $server = new RunSagsMC("/home/saggins/Documents/projects/minecraft-test", "startserver.sh");
    $server->start();

?>
