<?php
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $username = $_POST["userName"];
    $password = $_POST["password"];
    $youAre = $_POST["youAre"];
    $course = $_POST["course"];
    $level = $_POST["level"];
    $remember = isset($_POST["remember"]) ? "Yes" : "No";

    if (empty($name) || empty($email) || empty($password) || empty($username)) {
        echo "Please fill in all required fields.";
    } else {
        echo "Registration successful!<br>";
        echo "Name: $name<br>";
        echo "Age: $age<br>";
        echo "Email: $email<br>";
        echo "Date of Birth: $dob<br>";
        echo "Username: $username<br>";
        echo "Password: $password<br>";
        echo "You are: $youAre<br>";
        echo "Selected Course: $course<br>";
        echo "Selected Level: $level<br>";
        echo "Remember me: $remember<br>";
    }
}
?>