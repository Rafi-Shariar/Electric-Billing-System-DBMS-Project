<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab - 24 feb 2025</title>
    <style>
        form{
            padding: 20px;
            border: 2px solid black;
            width: 300px;
        }
    </style>
</head>
<body>

<h1>Student information</h1>
<form action="save.php" method="POST">
    <label for="id"> ID : </label>
    <input type="number" name = "f_id" required><br><br>

    <label for="name">Name :</label>
    <input type="text" name="f_name" id="" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name = "f_email" required><br><br>

    <input type="submit" value="save" name = "btn">
    <input type="submit" value="update" name = "btn">
    <input type="submit" value="delete" name = "btn">
    <input type="submit" value="view" name = "btn">

</form>
    
</body>
</html>