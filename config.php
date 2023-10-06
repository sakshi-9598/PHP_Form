<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
<div class="container">
<?php
if (@$_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name =   $_POST['first_name'];
    $last_name  =   $_POST['last_name'];
    $email      =   $_POST['email'];
    $contact    =   $_POST['contact'];
    $city       =   $_POST['city'];
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "sakshidb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "INSERT INTO userFormData(FirstName,    LastName, Email, Contact, City)
    VALUES 
    ('$first_name', '$last_name', '$email', '$contact','$city')";

    $rs = mysqli_query($conn, $sql);

    if ($rs) 
    {
        echo "New record created successfully";
    } 
    else 
    {
    echo "Error: ";
    }

            
    // echo $sql;

    // $result = $conn->query($sql);
    

    // $rows =  $result->fetch_assoc();

    // echo "<p>".$rows['Contact']."</p>";

    // if ($result->num_rows > 0){
    //     while($row = $result->fetch_assoc()){
    //         echo "<br>".$row["Contact"]." - Name:".$row["FirstName"]." ".$row["LastName"]."<br>";
    //     }
    // }
    // else{
    //     echo "0 rows returned...";
    // }
    mysqli_close($conn);
?>

</div>



</body>
</html>