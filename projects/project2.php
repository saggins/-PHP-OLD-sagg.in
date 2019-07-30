<html>
    <head>
        <title>Server Worker... yeah</title>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="project2.js"></script>
    </head>

    <body>
        <form action="POST">
            <div id="SB"> <!-- SB = Server Browser -->
                <p>Which game m8</p>
                    <!-- Add games like Tf2, CSgo, IDFK -->
                    <input type="radio" name="game" id="cusmc:" value="minecraft" checked v-model="server"> Custom Minecraft <br>
                    <input type="radio" name="game" id="valmc" value="VanilaServer" v-model="server"> Saggins' Orignal Vanila Server <br>
                    <input type="radio" name="game" id="source" value="TF2" v-model="server"> TF2 <br>
                <div v-if="server == 'cusmc'">
                    <p>Forge?</p>
                </div>
                    
                <div v-if="server = 'cusmc'">
                    <p>Custom Map</p>
                        <input type="file" name="Map" value=""> <br>
                    <p>Op(Player name If more pls seperate with commas)</p>
                        <input type="text" name="Op" value=""><br>
                </div>
                <div v-if="server == 'cusmc' || 'valmc'">
                    <p>Server Properties </p>
                    <!-- Css: Make text book biger -->
                    <input type="text" name="ServerProperties" value=""><br>
                </div>
             <input type="submit">

            </div>
        </form>
    </body>
</html>

<?php


?>