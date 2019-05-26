<html>
    <head>
        <title>Server Worker... yeah</title>
    </head>

    <body>
        <form action="POST">
            <p>Which game m8</p>
            <!-- Add games like Tf2, CSgo, IDFK -->
            <input type="radio" name="game" value="minecraft" checked> Custom Minecraft <br>
            <input type="radio" name="game" value="VanilaServer"> Saggins' Orignal Vanila Server <br>

            <!-- Just incase -->
            <p>Forge?</p>

            <p>Server Properties</p>
            <!-- Css: Make text book biger -->
            <input type="text" name="ServerProperties" value=""><br>

            <p>Custom Map</p>
            <input type="file" name="Map" value=""> <br>
            <p>Op(Player name If more pls seperate with commas)</p>
            <input type="text" name="Op" value=""><br>

            <input type="submit">


        </form>
    </body>
</html>

<?php

file_put_contents("./project2/server.properties", escapeshellarg( $_POST["ServerProperties"] ) )

?>