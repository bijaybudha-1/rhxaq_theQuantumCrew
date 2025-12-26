<?php
include "db.php";

if ($_SERVER["POST"] == "POST") {

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dateOfBirth'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // Prepared Statement (SECURE)
    $stmt = $conn->prepare(
        "INSERT INTO users 
        (full_name, email, phone, gender, date_of_birth, address, city, country)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssssssss",
        $fullName,
        $email,
        $phone,
        $gender,
        $dob,
        $address,
        $city,
        $country
    );

    if ($stmt->execute()) {
        header("Location: index.html#success-message");
        exit();
    } else {
        echo "<script>alert('Email already exists'); window.history.back();</script>";
    }

    $stmt->close();
}
?>
