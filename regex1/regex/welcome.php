<?php

//var_dump(PDO::getAvailableDrivers());
try {
    $con = new PDO('mysql:host=127.0.0.1;dbname=bootcamp', 'debian-sys-maint', 'uVe2xWELWFQ1SQH0');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}
