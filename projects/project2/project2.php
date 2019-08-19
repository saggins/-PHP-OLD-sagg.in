

<html>
    <head>
    </head>
    <body>
        <p>
            Server is: 
            
        </p>
        
    </body>
</html>

<?php
    #secho shell_exec("cd /home/saggins/Documents/projects/sangminchun.info/ | sh ./testscript.sh 2>&1");
    $server = new RunSagsMC("/home/saggins/Documents/projects/sangminchun.info/projects/project2", "testscript.sh");
    



?>
