<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EBS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$meter_number = $_POST['meter_number'];



$sql = "DELETE FROM Customer_List WHERE meter_number = $meter_number" ;
$result = $conn->query($sql);

if($result){
    echo '
    
            <script>
                alert("User Deleted Successfully.");
                window.location = "../Dashboards/DeleteUser.html"

            </script>
    ';
}



?>