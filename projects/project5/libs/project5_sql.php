<?php

    class Project_5_SQL {
        public function __construct($SERVER, $USERNAME, $PASSWORD, $DATABASE)
        {
            $this->db = new mysqli($SERVER,$USERNAME,$PASSWORD,$DATABASE)
            or die("Failed to connect to server or database");
        }
        

        #It should expire by tom
        private function expiredate(){
            $exprdate;
            return $exprdate;
        }

        public function postfile($s3link){
            $mp5 = $_GET[$s3link];
            #TODO: sql isn't correct
            if ($stmt = mysqli_prepare($this->db, "SELECT * FROM `` WHERE netid=?")) {

            }
        }
    }

?>
