<?php
    $dns = 'mysql:host=localhost;dbname=messagerie' ;
    $user = 'root';
    $password = '';

    try{
        $db = new PDO($dns, $user, $password);
    }
    catch(Exception $message){
        echo "impossible de se connectre" . "<pre>$message</pre>";
    }

?>