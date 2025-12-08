<?php
// Get form data
$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
$website = isset($_POST["website"]) ? htmlspecialchars($_POST["website"]) : '';
$comment = isset($_POST["comment"]) ? htmlspecialchars($_POST["comment"]) : '';
$gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : '';

// Output the received data (for verification)
echo "<h1>Submission Details:</h1>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Comment: " . $comment . "<br>";
echo "Website: " . $website . "<br>";
echo "<hr>";

// Database configuration - Note: 'db' is the service name
$servername = "db"; // Using 'db' as per your folder rename and best practice
$username = "root";
$password = "Pass@123"; 
$dbname = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert data
$sql = "INSERT INTO users (name, email, website, comment, gender) 
        VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if (mysqli_query($conn, $sql)) {
  echo "<h2>New record created successfully in the database!</h2>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
