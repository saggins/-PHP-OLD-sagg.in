<?php

use Thedudeguy\Rcon;
require_once('thedudeguy/Rcon.php');

    class RunSagsMC 
    {
        public function __construct(string $PathToScript, $startscript){
            $this->path = $PathToScript;
            $this->script = $startscript;
            $this->cmd = "cd ".$this->path." && sh ./".$this->script." 2>&1";
        }
        public function start(){
            
            return shell_exec($this->cmd);

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