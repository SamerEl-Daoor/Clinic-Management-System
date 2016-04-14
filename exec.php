<meta charset="utf-8">
<?php

header('Content-Type: text/html; charset=utf-8');
$servername="localhost";
$username="root";
$pass="";
$db_name="cms2";
$tbl_name="patients";
$Patient_Name=  isset($_POST['pn']);
$Age=  isset($_POST['age']);
$Mob= isset($_POST['mob']);
$Case=isset($_POST['case']);
$conn=new mysqli($servername,$username,$pass,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO $tbl_name (`id`, `Name`, `age`, `fone#`, `Patient_Case`)      
        VALUES(null,'$Patient_Name','$Age','$Mob','$Case')";                                      
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully  <a href=add.php>أضف مريضا <a/>"  ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();