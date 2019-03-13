<?php

function GetLinkToDB() {

    global $link;
    #$url = "";
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'cruddb';
    $link = mysqli_connect($server, $username, $password, $db) or die("Couldn’t connect to database" . "<br />" .  
        "Error (" . mysqli_connect_errno() . "): " . mysqli_connect_error() . "");
    return $link;
}

?>