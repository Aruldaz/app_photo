<?php

class Database{
    public static $conn = null;

    public static function getConnection()
    {
        if(Database::$conn == null){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mydb";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error); // TODO: replace this with expection handling
            }else{
                Database::$conn = $conn;
            }

        } else{
            return Database::$conn;
        }
    }

}