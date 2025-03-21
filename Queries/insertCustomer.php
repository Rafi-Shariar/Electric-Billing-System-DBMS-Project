
<?php

$conn = new mysqli("localhost", "root", "", "EBS");

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
    $phone = $_POST['phone'];
    $secondary_phone = $_POST['secondary_phone'];
    

    //Query
    $sql = "CALL AddNewCustomer('$phone','$secondary_phone','$userID','$meter_number','$fullname','$nid','$address','$city','$meter_type','$bill_type','$email')";

    if($conn->query($sql)){

        echo '
        <script>
             alert("New Customer Added");
             window.location = "../index.html"
        </script>
      ';

    }
    else {
        
        echo '
        <script>
             alert("An Error Occured, Try again.");
             window.location = "../index.html"
        </script>
      ';
    }
 

?>
