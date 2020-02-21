<?php
//print_r($_REQUEST);die;
$col = $_REQUEST['dropdown[0]'];
echo 'col : '.$col;
//  $col=$_REQUEST["field"];
//echo $col . '<br>';
 $data = $_REQUEST['d'];
 echo 'Data : '.$data;

//echo $data ."<br>";

 try {
     $conn = new PDO('mysql:host=127.0.0.1;dbname=bootcamp', 'debian-sys-maint', 'uVe2xWELWFQ1SQH0');
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //var_dump($conn);
     //echo "select * from forms where $col = '$data'";die;
     $dataobj = $conn->query("select * from form where $col = '$data'")->fetchAll(PDO::FETCH_ASSOC);

     var_dump($dataobj);
     $conn = null;
 } catch (PDOException $ex) {
     die('Error:'.$ex);
 }

?>   