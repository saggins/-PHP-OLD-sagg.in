<?php
include("RandomCode.php");
session_start();

?>
<html>
    <head>

    </head>
    <body>
        <form action="">
            <label>Upload vid here bruh</label><input type="file">
            <input type="submit">
        </form>
    </body>
</html>

<?php

    $code4user = RandomCode(10);
    echo($code4user);

?>