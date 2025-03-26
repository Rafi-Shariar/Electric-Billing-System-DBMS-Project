<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EBS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$meter_number = (int) $_POST['meter_number'];
$month = $_POST['month'];
$year =(int) $_POST['year'];
$units =(int) $_POST['unit'];
$amount =(int) $_POST['amount'];
$status = "Unpaid";

$query2 = mysqli_query($conn, "CALL SubmitBill($meter_number, '$month', $units, $amount, 'Unpaid' , $year)");
    
if($query2){

    echo '
    <script>
     alert("Bill Sent Successfully !");
     window.location = "../Dashboards/AdminDashboard.html";
    </script>
    ';

}



?>