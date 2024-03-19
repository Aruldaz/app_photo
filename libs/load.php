<?php
function load_tempate($name){
    include __DIR__."/../_templates/$name.php";
}

function validate_credentials($username, $password){
    if($username == "arul.satt@gmail.com" and $password == "Delecta")
    {
        return true;
    } else
    {
        return false;
    }


}




