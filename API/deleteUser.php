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

if($result->num_rows > 0){
    echo '
    
            <script>
                alert("User Deleted Successfully.");
                window.location = "../Dashboards/DeleteUser.html"

            </script>
    ';
}
else {
    
    echo '
    <script>
        alert("No Such Meter ID found on System !!");
       window.location = "../Dashboards/DeleteUser.html";
     </script>
    ';
}



?>