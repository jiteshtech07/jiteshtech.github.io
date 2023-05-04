
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
 }
else{
echo "Connected successfully";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Subject = $_POST["Subject"];
    $Message = $_POST["Message"];
    $Contact = $_POST["Contact"];
    $sql = "INSERT INTO jitesh(Name, Email, Subject,Message,Contact)
     VALUES ('$Name', '$Email', '$Subject','$Message','$Contact')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>REQUEST!</strong> Submited successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    } else {
      echo "error" . mysqli_error($conn);
}
  }
}
?>
