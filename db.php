<?php

require_once "config.php";

class db{

    protected $DB_HOST = DB_HOST;
     protected $DB_USER = DB_USER;
      protected $DB_PSWRD = DB_PSWRD;
       protected $DB_NAME = DB_NAME;

       public $mqsqli;

       public function __construct(){
           $this->open_connection();
       }

       private function open_connection(){
           $this->mysqli = new mysqli($this->DB_HOST,$this->DB_USER,$this->DB_PSWRD,$this->DB_NAME);
            
          
       if ($this->mysqli->connect_errno) {
           echo "Failed to connect to Database: (" . $this->mysqli->connect_errno . " ) " . $this->mysqli->connect_error;
       }
       }
        
}