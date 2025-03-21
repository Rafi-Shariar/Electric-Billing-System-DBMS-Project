<?php
$servername = "localhost";
$username = "root";
$password = "";
$databass_name = "rafi";

$conn = new mysqli($servername, $username, $password, $databass_name);

if($conn->connect_error){
	die("Connection fail: " . $conn->connect_error);
}
echo "Connection is successful <br>";

$id=$_POST['f_id'];
$name=$_POST['f_name'];
$email=$_POST['f_email'];
$action = $_POST['btn'];

 if($action == 'save'){


 $sql = "INSERT INTO students (id ,name ,email ) VALUES ($id,'$name','$email')";

   if($conn->query($sql) === TRUE){
	echo "New Student added in database";
   }else{
	echo "Error:" . $sql . "<br>" . $conn->error;
   }

}
elseif ($action == 'update') {
	$sql = "UPDATE students SET name='$name', email='$email' WHERE id=$id";

   if($conn->query($sql) === TRUE){
	echo "Student data updated";
   }else{
	echo "Error:" . $sql . "<br>" . $conn->error;
   }
}
elseif ($action == 'delete') {
	$sql = "DELETE from students where id = $id";

   if($conn->query($sql) === TRUE){
	echo "Student Data deleted";
   }else{
	echo "Error:" . $sql . "<br>" . $conn->error;
   }
}
elseif ($action == 'view') {

	$sql = "SELECT * from students";
	$result = $conn->query($sql);

	if($result->num_rows>0){
		echo "<h2>Student list</h3>";
		echo "<table border='1'>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		</tr>";


		while($row = $result->fetch_assoc()){
			echo "
			<tr>
			<td> ". $row['id'] . " </td>
			<td> ". $row['name'] . " </td>
			<td> ". $row['email'] . " </td> 
			</tr>
			";
		}

		echo "</table>";

	}
	else{
		echo "Not users found";
	}
}









?>























