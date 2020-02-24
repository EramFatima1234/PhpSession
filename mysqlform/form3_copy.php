<?php
    include 'welcome.php';
    $field = $_POST['dropdownOption'];
    $value = $_POST['value'];
    //echo $field. ':' .$value;
?>
<head>
    <title>Search Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php
    // echo $field . " : " . $value;

    $stmt = $con->query("SELECT * from form where $field = '$value'");
    $count = 0;
    ?>
    <div class="container mt-5">
        <div class="row mx-auto w-50" style="display:block;">
            <h2 class="mb-4" style="font-family: monospace;background-color: #54d6b8;border-radius: 10px; text-align: center;">Search Results</h2>
            <table class="w-100 table">
                <tr>
                    <th>Name</th><th>Email ID</th><th>Phone Number</th>
                </tr>
                <?php
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <tr><td>
                    <?php
                    echo $row['first_name'].' '.$row['last_name'];
                    ?>
                    </td><td>
                    <?php
                    echo $row['email'];
                    ?>
                    </td><td>
                    <?php
                    echo $row['contact_no'];
                    $count=$count+1;
                    ?>
                    </td></tr>
                    <?php
                }
                ?>
                <caption>
                    <?php
                        echo 'Total Rows Fetched : '.$count;
                    ?>
                </caption>
            </table>
            <a href="form11.html" class="form-control text-center">Back to Homepage</a>
            </div>
        </div>
    </body>
</html>
<?php

?>
