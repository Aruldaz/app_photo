<?php
function load_tempate($name)
{
    include __DIR__ . "/../_templates/$name.php";
}

function validate_credentials($username, $password)
{
    if ($username == "arul.satt@gmail.com" and $password == "Delecta") {
        return true;
    } else {
        return false;
    }
}

function signup($usern, $pass, $email, $phone)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `login` (`username`, `password`, `email`, `phone`, `blocked`, `active`) VALUES ('$usern', '$pass', '$email', '$phone', '0', '1');";
    $error = false;
    
    if ($conn->query($sql) === TRUE) {
        $error = false;
    } else {
        // echo "Error:" . $sql . "<br>" . $conn->error;
        $error = $conn->error;
    }

    $conn->close();
    return $error;
}
