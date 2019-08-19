<?php

use Thedudeguy\Rcon;
require_once('thedudeguy/Rcon.php');
    
    interface Runserver{
        public function __construct(string $PathToScript);
        public function quitserver($server);

    }

    class RunSagsMC implements Runserver
    {
        public function __construct(string $PathToScript, $startscript){
            echo shell_exec("cd " + $PathToScript + "&& " + $startscript, 'r');
        }
        public function quitserver(){
            $host = 'localhost';
            $port = 25565;
            $password='EDIT';
            $timeout= 3;

            $rcon  = new Rcon($host, $port, $password, $timeout);
            if($rcon->connect()){
                $rcon->sendCommand("stop");
            }
        }
        
    }
?>