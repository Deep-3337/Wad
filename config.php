<?php
class database
{ 
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "shopping";
    function getconn()
    {
    // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
        // Check connection
        if ($conn==false)
        {
            dir("Connection failed: ");
        }
    }
}
?>