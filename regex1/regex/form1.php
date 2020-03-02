<?php

ini_set('display_errors', 1);
include 'welcome.php';

// $fname = $_POST['first_name'];
// $lname = $_POST['last_name'];
// $email = $_POST['email'];
// $contact = $_POST['contact_no'];

if (isset($_POST['first_name'])) {
    $fname = $_POST['first_name'];
    if (!preg_match('/^[a-zA-Zs]+$/', $fname)) {
        echo 'first Name must only contain letters!';
    }
}
if (isset($_POST['last_name'])) {
    $lname = $_POST['last_name'];
    if (!preg_match('/^[a-zA-Zs]+$/', $lname)) {
        echo 'Last Name must only contain letters!';
    }
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // echo "$email is a valid email address";
    } else {
        die("$email is not a valid email address");
    }
}
if (isset($_POST['contact_no'])) {
    $contact = $_POST['contact_no'];
    $valid_number = filter_var($contact, FILTER_SANITIZE_NUMBER_INT);
    if (strlen($valid_number) < 10 || strlen($valid_number) > 10) {
        die('Invalid Number <br>');
    }
}

try {
    $select = 'SELECT * from form where email = :email or contact_no = :contact_no';
    //$select = 'SELECT * from form where email = :email or contact_no = :contact_no or (last_name = :last_name and first_name = :first_name)';

    $stmt = $con->prepare($select);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contact_no', $contact);
    //$stmt->bindParam(':first_name',$fname);
    //$stmt->bindParam(':last_name',$lname);
    $stmt->execute();
    $rows = count($stmt->fetchAll());
    if ($rows > 0) {
        echo 'Sorry, Your data is already stored :(';
        echo '<a href="http://www.example1.com/regex/form1.html">Go Back</a>';
    } else {
        $sql = 'INSERT INTO form (first_name, last_name, email, contact_no) 
    values (:first_name, :last_name, :email, :contact_no)';
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':first_name', $fname);
        $stmt->bindParam(':last_name', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact_no', $contact);

        $stmt->execute();
        //echo 'records added';
        echo'<h1>Recorded Successfully</h2>';
        echo '<a href="http://www.example1.com/regex/form1.html">Go Back</a>';
    }
} catch (PDOException $e) {
    echo 'Connection failed: '.$e->getMessage();
    $con = null;
}

    //header('Location: form1.html');
    //header('refresh: 5; url = http://www.example1.com/mysqlform/form1.html');

  exit();