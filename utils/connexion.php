<?php

function connexion() {
    return new PDO
    (
        'mysql:host='.URL_BDD. ':'.PORT_BDD. ';dbname='. 
        NAME_BDD ,  
        LOGIN_BDD, 
        PASSWORD_BDD, 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}
