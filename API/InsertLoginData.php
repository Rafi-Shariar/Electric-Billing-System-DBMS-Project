<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EBS";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Getting Data from user
$userID = $_POST['userID'];
$pass = $_POST['pass'];

//Checking If userID exists in customerlist DB
$sql = "SELECT user_id FROM Customer_List WHERE user_id = $userID";
$result = $conn->query($sql);

if($result->num_rows>0){

    while($row = $result->fetch_assoc()){

        echo "User ID found: " . $row["user_id"] . "<br>";
        

        //Inserting Data into login_credentials
        $query2 = mysqli_query($conn, "INSERT INTO Login_Credentials(userid,password) VALUES ($userID,'$pass')");

        if($query2){
            echo '
            <script>
               alert("Congratulations, You Have Been Registered");
               window.location = "../";
             </script>
            ';
        }
        else {
            echo '
            <script>
               alert("Error!! Try Again");
               window.location = "../Dashboards/User/RegisterUser.html";
             </script>
            ';
        }

    }
}
else {
    echo '
    <script>
       alert("User ID not Found in the sytem);
       window.location = "../Dashboards/User/RegisterUser.html";
     </script>
    ';
}

?>
