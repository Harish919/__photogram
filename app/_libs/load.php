<?php

function load_template($name){
    include $_SERVER['DOCUMENT_ROOT'] ."/app/_templates/$name.php"; //not consiatent
} 

function validate_credentials($username, $password) {

    if($username == "Harish@gmail.com" and $password == "123"){
        return true;
    }else{
        return false;
    }
}

?>
