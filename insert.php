<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$groupmember = $_POST['Groupmember'];
$projecttitle = $_POST['ProjectTitle'];
$groupnumber = $_POST['GroupNumber'];
$Criteria = $_POST['Criteria'];
$requirement = $_POST['Requirement'];
$appropriatetool = $_POST['Appropriatetool'];
$oral = $_POST['oral'];
$functioned = $_POST['Functioned'];
$total = $_POST['Total'];
$judge = $_POST['Judge'];
$comments = $_POST['Comments'];

$sql = "INSERT INTO grade (Groupmember, ProjectTitle, GroupNumber, Criteria, Requirement, Appropriatetool, oral, Functioned, Total, Judge, Comments)
VALUES ('$groupmember', '$projecttitle', '$groupnumber', '$Criteria', '$requirement', '$appropriatetool', '$oral', '$functioned', '$total', '$judge', '$comments')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
