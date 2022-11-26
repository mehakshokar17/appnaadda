<?php
require 'database.php';

if (isset($_POST["method"]) && $_POST["method"] == "login" && isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $result = mysqli_query($conn, "SELECT COUNT(*) FROM signup where email ='$email' and password='$pwd' ");
    $row = $result->fetch_assoc()["COUNT(*)"];
    if ($row == 1) {
        echo '{
           "method": "Login",
           "action": "Success"  
        }';
        http_response_code(200);
    } else {
        echo '{
            "method": "Login",
            "action": "Fail"  
         }';
         http_response_code(403);
    }
    exit();
}

echo '{
    "message": "Enter in a valid API callback to execute a function"
}';