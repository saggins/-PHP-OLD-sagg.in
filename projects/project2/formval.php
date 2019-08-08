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
    public function __setpath($PathToProps)
    {
        $this->path=$PathToProps;

    }
    public function checkfiles()
    {
        $file = fgets($PathToProps, "r");
        
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
        $this->PathToProps = $PathToProps;
        $this->Op = $Op;
    }
    /**
     * Actual thing to validate.
     */
    public function validate()
    {
        

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