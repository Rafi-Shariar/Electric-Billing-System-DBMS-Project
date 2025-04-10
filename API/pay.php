<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EBS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$BillID = $_POST['paybill'];

$query = mysqli_query($conn, "CALL MarkBillAsPaid($BillID)");

if($query){

    echo '
    <script>
       alert("Redirecting to payment gateway....");
       alert("Thank you, your bill have been paid.");
       window.location = "../Dashboards/User/UserDashboard.html";
     </script>
    ';
}
else {
    echo 'Error';
}

?>
