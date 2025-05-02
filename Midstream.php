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
$Pipeline= $_POST['pipelineName'] ?? '';
$OriginPoint=$_POST['origin'] ?? '';
$DestinationPoint = $_POST['destination'] ?? '';
$ProductType=$_POST ['productType'] ?? '';
$AdditionalNotes=$_POST['notes'] ?? '';
$TransportDate=$_POST['transportDate'] ?? '';
$PipelineDiameter=$_POST['pipelineDiamete'] ?? '';
$OperatingPressure= $_POST['pressure'] ?? '';
$StorageCapacity= $_POST['storageCapacity'] ?? '';
}
// Insert data into database
$sql = "INSERT INTO midstream(
Pipeline,OriginPoint,DestinationPoint,ProductType,AdditionalNotes,TransportDate,PipelineDiameter,OperatingPressure,StorageCapacity)
 VALUES (
'$Pipeline','$OriginPoint','$DestinationPoint','$ProductType','$AdditionalNotes','$TransportDate','$PipelineDiameter','$OperatingPressure','$StorageCapacity')";

if ($conn->query($sql) === TRUE) {
    echo "connection successful";


}else{

    echo "connection faild";


}

$conn->close();







?>