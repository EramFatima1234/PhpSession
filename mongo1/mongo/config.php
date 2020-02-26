<?php

/*try {
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
echo "database connected";
$conn = new MongoDB\Driver\BulkWrite;
} catch (MongoDB\Driver\Exception\Exception $e) {
echo "Exception:", $e->getMessage(), "\n";
echo "In file:", $e->getFile(), "\n";
echo "On line:", $e->getLine(), "\n";
}*/



require_once __DIR__ . "/vendor/autoload.php";


$collection = (new MongoDB\Client)->bootcamp->books;


?>
