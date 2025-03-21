<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EBS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Getting User Data
$userID = $_POST['userid'];
$pass = $_POST['pass'];
$userType = $_POST['usertype'];


//Handling Admin login Manually
if($userType === 'Admin'){
    echo '
    <script>
       window.location = "../Dashboards/AdminDashboard.html";
     </script>
    ';
    exit();
}


//User Authentication
$sql = "SELECT * FROM Login_Credentials WHERE userid = $userID AND password = '$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $row = $result->fetch_assoc();

    if($userID === $row['userid'] && $pass === $row['password']){
        
        echo '
            <script>
               alert("Successfully Logged in.");
               window.location = "../Dashboards/User/UserDashboard.html";
             </script>
            ';
    }
    else {

        echo '
            <script>
               alert("Wrong Username or Password !!");
               window.location = "../";
             </script>
            ';
        
    }


}
else {
    echo '
            <script>
               alert("Wrong Username or Password !!");
               window.location = "../";
             </script>
            ';
}




