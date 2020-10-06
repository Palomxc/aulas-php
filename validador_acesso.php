<?php
session_start();

if(!isset($_session[ 'autenticado']) && $_SESSION['autenticado'] != 'SIM' ){
    
    header('location: index.php?login=erro2');
}

?>