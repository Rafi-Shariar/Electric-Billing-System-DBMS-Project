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

    $row = $result->fetch_assoc();

    echo'


    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electric Billing System - Login</title>

    <!-- Tailwind + Daisy UI Setup -->
    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@5"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Custom Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome / Icon Setup -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />

    <!-- Common Style -->
    <style>
      .font-primary {
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body class="font-primary">
    <header>
      <div class="p-5 border-b border-blue-600 shadow-lg">
        <div class="flex justify-center items-center gap-8">
          <img src="./Images/logo.png" alt="" class="w-16" />
          <h1 class="text-4xl font-semibold text-slate-500">
            Daffodil Power Distribution
          </h1>
        </div>
      </div>
    </header>

    <main class="w-10/12 mx-auto">

        <h1 class="text-xl font-semibold text-center text-slate-500 mt-20">Billing Details</h1>

        <div class="w-5/12 mx-auto mt-10">
            <div class="overflow-x-auto rounded-box  bg-base-100 p-4">
                <form action="./confirmSubmit.php" method="POST">

                 <input type="hidden" name="meter_number" value='.$meter_number .'> 
                <input type="hidden" name="month" value='.$month.'>
                <input type="hidden" name="year" value='.$year .'>
                <input type="hidden" name="unit" value='.$units .'>
                <input type="hidden" name="amount" value='.$amount .'>


                    <table class="table">

                        <tbody>
                          <tr>
                            <th class="text-left">Meter Number:</th>
                            <td > '. $meter_number .' </td>
                          </tr>
                          <tr>
                            <th class="text-left">Name:</th>
                            <td>'. $row['full_name'] .'</td>
                          </tr>
                          <tr>
                            <th class="text-left">Address:</th>
                            <td>'. $row['address'] .'</td>
                          </tr>

                           <tr>
                            <th class="text-left">City:</th>
                            <td>'. $row['city'].'</td>
                          </tr>
      
                         
                            <tr>
                              <th class="text-left">Email:</th>
                              <td>'. $row['email'].'</td>
                            </tr>
                            <tr>
                              <th class="text-left">Meter Type</th>
                              <td>'. $row['meter_type'].'</td>
                            </tr>
                            
                            <tr>
                              <th class="text-left">Month:</th>
                              <td>'. $month .'</td>
                            </tr>
                            <tr>
                              <th class="text-left">Year</th>
                              <td>'. $year .'</td>
                            </tr>
                            <tr>
                              <th class="text-left">Units Used:</th>
                              <td> '. $units .'</td>
                            </tr>
                            <tr>
                              <th class="text-left">Amount:</th>
                              <td>'. $amount .'</td>
                            </tr>
                        </tbody>
                      </table>

                      
                      <div class="flex justify-between mt-20 pb-20">
                        <button class="btn btn-lg bg-blue-500 text-white" type="submit">Confirm</button>
                        <a href="../Dashboards/AdminDashboard.html" class="btn btn-lg bg-red-500 text-white"> Cancle</a>
                      </div>
                </form>
              </div>
              
        </div>
    </main>

    
  </body>
</html>

    
    
    
    ';

}
else {
       
    echo '
    <script>
        alert("No Such Meter ID found on System !!");
       window.location = "../Dashboards/CalculateBill.html";
     </script>
    ';

    return;
}


// $sql2 = "SELECT * FROM Customer_List WHERE meter_number = $meter_number";
// $result2 = $conn->query($sql2);

// if($result->num_rows > 0){

//     $query2 = mysqli_query($conn, "CALL SubmitBill($meter_number, '$month', $year, $units, 'Unpaid' , $year)");
    
//     if($query2){

//         echo '
//         <script>
//          alert("New Bill Submited to User.");
//          window.location = "../Dashboards/CalculateBill.html";
//         </script>
//         ';

//     }
//     else {
//         echo '
//         <script>
//          alert("Try Again");
//          window.location = "../Dashboards/CalculateBill.html";
//         </script>
//         ';
//     }

// }
// else {
       
//     echo '
//     <script>
//         alert("No Such Meter ID found on System !!");
//        window.location = "../Dashboards/CalculateBill.html";
//      </script>
//     ';
// }

?>