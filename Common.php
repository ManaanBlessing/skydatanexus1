<?php


$servername = "localhost"; 
$username = "root";        
$password = "";             
$dbname = "skydatanexus";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
$DataFormat= $_POST['dataFormat'] ?? '';
$EmailAddress=$_POST['email'] ?? '';
$PhoneNumber = $_POST['phone'] ?? '';
$IndustrySector=$_POST ['sector'] ?? '';

}
// Insert data into database
$sql = "INSERT INTO common(DataFormat,EmailAddress,PhoneNumber,IndustrySector)
 VALUES ('$DataFormat','$EmailAddress','$PhoneNumber','$IndustrySector')";

if ($conn->query($sql) === TRUE) {
    echo "connection successful";


}else{

    echo "connection faild";


}

$conn->close();







?>