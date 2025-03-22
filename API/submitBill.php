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
$month = $_POST['month'];
$year = $_POST['year'];
$units = $_POST['unit'];
$amount = $_POST['amount'];
$status = "Unpaid";

$sql = "SELECT * FROM Customer_List WHERE meter_number = $meter_number";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $query2 = mysqli_query($conn, "CALL SubmitBill($meter_number, '$month', $year, $units, 'Unpaid' , $year)");
    
    if($query2){

        echo '
        <script>
         alert("New Bill Submited to User.");
         window.location = "../Dashboards/CalculateBill.html";
        </script>
        ';

    }
    else {
        echo '
        <script>
         alert("Try Again");
         window.location = "../Dashboards/CalculateBill.html";
        </script>
        ';
    }

}
else {
       
    echo '
    <script>
        alert("No Such Meter ID found on System !!");
       window.location = "../Dashboards/CalculateBill.html";
     </script>
    ';
}

?>