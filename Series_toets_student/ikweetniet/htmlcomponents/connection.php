<?php

/* function getchar()
{ */
    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT * FROM characters");
    $stmt->execute(); 
    $datachar[] = $stmt->fetchAll();
    
/* }
function getcount()
{ */
    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT COUNT(id) FROM characters");
    $stmt->execute(); 
    $count = $stmt->fetchcolumn();
/* }
function getshows()
{ */
    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT * FROM shows");
    $stmt->execute(); 
    $datashows[] = $stmt->fetchAll();
/* } */


