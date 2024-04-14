<?php
include_once 'includes/Database.class.php';

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
 $conn = Database::getConnection();

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
