<?php

/**
 * This is a php file that contains the main class for Form Valiadtion. 
 * This should also vaildate if it has any security things to worry about. If any are detctable.
 * 
 * Any default servers shouldn't be in here because, they don't have properties
 * 
 * CURRENT SERVERS IN:
 * 
 * CusMc
 * Tf2
 * 
 * @author Sangmin Chun <win32prog@gamil.com>
 * 
 */

interface FormValidate
{
    
    /**
     * __construct declares all the variables needed for a function
     */
    public function __construct();

    /**
     * Main Function that will do all of the thinking for validation.
     * 
     * NOTE: make sure to santize the input. Pls no remote code exec
     * 
     * @return boolean
     */    
    public function validate();
    
}
/**
 * Generally will include anything that is a minecraft server.
 * 
 */
interface Mcval extends FormValidate
{
    /**
     *  Adds to __construct so it includes path to server.properties
     */
    public function __construct($PathToProps, $Op);

}

/**
 * All generic SourceServers
 */
interface SourceVal extends FormValidate
{   
    /**
     * Adds auto execs to __construct. $autoexecs will include things like what should be the rcon pass or what map or what map cycle
     */
    public function __construct($autoexecs);     
}


/**
 * Server Properties check the files.
 */
class ServerProperties {
    public function __construct($PathToProps)
    {
        $this->path=$PathToProps;

    }

    public function getpath()
    {
        return $this->path;
    }

    /**
     * checkfiles making sure things are correct
     *
     * @param [string] $path
     * @return boolean
     */
    public function checkfiles()
    {
        $file = fgets($this->path, "r");
        $valid = true; /** For testing use True */
        $linenum = 0;
        while(! feof($file))
        {

            $line = fgets($file);
            $values = explode("=", $line);
            $prop = $values[0];
            $value = $values[1];
            $linenum++;


            switch($prop){
                /**
                 * checking for commenting
                 */
                case strpos($line, 0) == "#":
                    break;
                /**
                 *  checking if spawn-protection is correct
                 */
                case $prop == "spawn-protection":
                    if ( checktype($value, "int") == true ) {
                        break;
                    }
                    else {
                        $answer= false;
                        break;
                    }
                case $prop == "max-tick-time":
                    break;
                
                case $prop == "query.port":
                    break;
            }
            if($answer == false){
                break;
            }
            
        }
        
    }

    /**
     * checktype
     *
     * @param any $value
     * @param string $expected
     * @return boolean
     */
    private function checktype($value, $expected)
    {
        $compare = settype($value, $expected);
        if(strlen((string)$compare) == strlen((string)$expected)){
            return false;
        }
        else {
            return true;
        }
    }
}

/**
 * Form Validation for Custom Minecraft server! thing...
 */

class CusMC implements Mcval
{
    /**
     * Declares everything needed. 
     * 
     * NOTE: $PathToProps is just the path to server.properties NONTHING else.
     * NOTE: $Op Make sure not to leave $Op  a list of usernames.
     * 
     */
    public function __construct($PathToProps, $Op)
    {
        $this->path = $PathToProps;
        $this->op = $Op;
    }
    /**
     * Actual thing to validate.
     */
    public function validate($path, $op)
    {
        $server =  new ServerProperties($this->path);
        $server ->checkfiles();

    }
}
/**
 * Class for the generic TF2 server
 */

class TF2 implements SourceVal
{

    /**
     * Declares any scripts that should be in the server.cfg
     */

    public function __construct($autoexecs)
    {
        $this->autoexecs = $autoexecs;
    }

    
    /**
     * Will do the santizing and validating
     * 
     * @return boolean
     */

    public function validate()
    {
        
    }
}


?>