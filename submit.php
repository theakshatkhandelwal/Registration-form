<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // Process or save the data (e.g., to a database) if needed
    // For now, we'll just display the submitted information

    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Full Name:</strong> $name</p>";
    echo "<p><strong>Email Address:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
}
?>
