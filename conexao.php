<?php 
    $mysql = new mysqli('127.0.0.1', 'root', 'root', 'db_site');
    $mysql->set_charset('utf8');
    
    if($mysql == TRUE) {
        echo "";
    } else {
        echo "Erro na conexão";
    }
?>