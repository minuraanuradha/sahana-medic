<?php
include('C:\xampp\htdocs\web\sahana-medic\Admin\Controllers\doc_config.php');

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
?>
