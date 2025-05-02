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
$projectname = $_POST['fieldName'] ?? '';
$locations=$_POST['location'] ?? '';
$productionDate = $_POST['productionDate'] ?? '';
$oilProduction=$_POST ['oilProduction'] ?? '';
$gasProduction=$_POST['gasProduction'] ?? '';
$drillingDepth=$_POST['drillingDepth'] ?? '';
$reservoirPressure=$_POST['reservoirPressure'] ?? '';
$AdditionalNotes=$_POST['notes'] ?? '';
$welltype= $_POST['welltype'] ?? '';
}
// Insert data into database
$sql = "INSERT INTO upstream (projectname,locations,productiondate,oilproduced,welltype,drillingdepth,reservoirpressure,gasproduction,note)
 VALUES ('$projectname', '$locations','$productionDate','$oilProduction','$welltype','$drillingDepth','$reservoirPressure','$gasProduction','$AdditionalNotes')";

if ($conn->query($sql) === TRUE) {
    echo "connection successful";


}else{

    echo "connection faild";


}

$conn->close();







?>