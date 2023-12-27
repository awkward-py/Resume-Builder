<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $objective = $_POST["objective"];
    $education = $_POST["education"];
    $experience = $_POST["experience"];

    $to = "youremail@example.com";
    $subject = "New Resume Submission";
    $message = "Name: " . $name . "\n\nEmail: " . $email . "\n\nPhone: " . $phone . "\n\nAddress: " . $address . "\n\nObjective: " . $objective . "\n\nEducation: " . $education . "\n\nExperience: " . $experience;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Your resume has been submitted. Thank you!</p>";
    } else {
        echo "<p>There was an error submitting your resume. Please try again.</p>";
    }
}
?>
