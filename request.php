<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $grade = htmlspecialchars($_POST['grade']);
    $email = htmlspecialchars($_POST['email']);

    // pang Validate
    if (!empty($name) && !empty($grade) && filter_var($email, FILTER_VALIDATE_EMAIL)) {


        // print for checking errors
        echo "Name: $name<br>";
        echo "Grade & Section: $grade<br>";
        echo "Email: $email<br>";
        
        // 
        echo "Salamat.";
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Invalid request method.";
}
?>
