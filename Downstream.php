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
$Refinery= $_POST['facilityName'] ?? '';
$FacilityLocation=$_POST['location'] ?? '';
$ReportDate = $_POST['reportDate'] ?? '';
$CrudeOiInput=$_POST ['crudeInput'] ?? '';
$ProductOutput=$_POST['otherOutput'] ?? '';
$CapacityUtilization=$_POST['capacityUtilization'] ?? '';
$MaintenanceStatus=$_POST['maintenanceStatus'] ?? '';
$CO2Emissions= $_POST['emissions'] ?? '';
$AdditionalNotes= $_POST['notes'] ?? '';
}
// Insert data into database
$sql = "INSERT INTO downstream(
Refinery,FacilityLocation,ReportDate,CrudeOiInput,ProductOutput,CapacityUtilization,MaintenanceStatus,CO2Emissions,AdditionalNotes)
 VALUES ('$Refinery','$FacilityLocation','$ReportDate','$CrudeOiInput','$ProductOutput','$CapacityUtilization','$MaintenanceStatus','$CO2Emissions','$AdditionalNotes')";

if ($conn->query($sql) === TRUE) {
    echo "connection successful";


}else{

    echo "connection faild";


}

$conn->close();







?>
