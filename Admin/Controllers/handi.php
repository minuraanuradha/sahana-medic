<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sahana_medic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Your handler code starts here

if (isset($_POST['login'])) {
    $email = $_POST['InputEmail1'];
    $password = $_POST['InputPwd'];
    
    $sql = "SELECT * FROM `doc` WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // Execute query
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $row['id'];
        header("location: ../Admin/doc_dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
} else {
    echo "Invalid Access Method";
}

// Close connection
mysqli_close($conn);
?>
