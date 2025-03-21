<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EBS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$userID = $_POST['userID'];
$fullname = $_POST['fullname'];
$nid = $_POST['nid'];
$meter_number = $_POST['meter_number'];
$address = $_POST['address'];
$city = $_POST['city'];
$meter_type = $_POST['meter_type'];
$bill_type = $_POST['bill_type'];
$email = $_POST['email'];
$primary_phone = $_POST['phone'];
$secondary_phone = $_POST['secondary_phone'];


$query = mysqli_query($conn, "CALL AddNewCustomer('$primary_phone','$secondary_phone',$userID,$meter_number,'$fullname',$nid,'$address','$city','$meter_type','$bill_type','$email')"); 

if($query){

    echo '
    <script>
       alert("New Customer Added Successfully");
       window.location = "../Dashboards/AdminDashboard.html";
     </script>
    ';

}else{
	echo "Error:";
}
?>
