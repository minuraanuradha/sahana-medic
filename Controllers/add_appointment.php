<?php
session_start();
include '../Model/connection.php';

 if (!isset($_SESSION['user_id'])) {
     header("Location: login.php");
    exit(); 
}

 $user_id = $_SESSION['user_id'];

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $patientName = $_POST['patientName'];
    $symptom = $_POST['Symptom'];
    $appointmentDate = $_POST['appoinmentDate'];
    $appointmentTime = $_POST['appoinmentTime'];
    $takingMedications = $_POST['takingMedications'];
    $medicationDetails = isset($_POST['medicationDetails']) ? $_POST['medicationDetails'] : null;
    $contactNo = $_POST['contactNo'];

     $sql = "INSERT INTO appointment (user_id, patient_name, symptom, appointment_date, appointment_time, taking_medications, medication_details, contact_no) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("isssssss", $user_id, $patientName, $symptom, $appointmentDate, $appointmentTime, $takingMedications, $medicationDetails, $contactNo);
        if ($stmt->execute()) {
            header("Location: ../User/index.php");
            exit();
        } else {
            echo "Error executing query: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>
