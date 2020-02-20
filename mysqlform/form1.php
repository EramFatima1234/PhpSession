<?php

ini_set('display_errors', 1);
include 'welcome.php';

// $fname = $_POST['first_name'];
// $lname = $_POST['last_name'];
// $email = $_POST['email'];
// $contact = $_POST['contact_no'];

if (isset($_POST['first_name'])) {
    $fname = $_POST['first_name'];
}
if (isset($_POST['last_name'])) {
    $lname = $_POST['last_name'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['contact_no'])) {
    $contact = $_POST['contact_no'];
}

try {
    $sql = 'INSERT INTO form (firstName, SecondName, email, Phone) 
    values (:first_name, :last_name, :email, :contact_no)';
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':first_name', $fname);
    $stmt->bindParam(':last_name', $lname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contact_no', $contact);

    $stmt->execute();
    echo 'records added';
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
}

    $conn = null;
