<?php
include 'db.php';

if(isset($_POST['save']))
{
    $name = $_POST['technician_name'];
    $contact = $_POST['contact_number'];

    $sql = "INSERT INTO technicians
            (technician_name, contact_number)
            VALUES
            ('$name','$contact')";

    $conn->query($sql);

    echo "Technician Added!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Technician</title>
</head>
<body>

<h2>Add Technician</h2>

<form method="POST">

    Name:
    <input type="text" name="technician_name" required>

    <br><br>

    Contact:
    <input type="text" name="contact_number" required>

    <br><br>

    <input type="submit" name="save" value="Save">

</form>

<br>

<a href="index.php">Back</a>

</body>
</html>