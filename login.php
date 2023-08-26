<?php
session_start();  // Start a new or resume an existing session

if(isset($_SESSION["email"])){
    session_destroy();  // Destroy the session if "email" is set in the session
}

include_once 'dbConnection.php';  // Include the database connection script
$ref = @$_GET['q'];  // Get the value of the "q" query parameter from the URL. The "q" parameter is used for redirection after the login process.
$email = $_POST['email'];  // Get the value of the "email" field from the submitted form
$password = $_POST['password'];  // Get the value of the "password" field from the submitted form

// Sanitize the input to prevent SQL injection
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);

$password = md5($password);  // Hash the password using MD5

// Query the database to check if the email and password match a user's credentials
$result = mysqli_query($con, "SELECT name FROM user WHERE email = '$email' AND password = '$password'") or die('Error');

$count = mysqli_num_rows($result);  // Get the number of rows returned from the query

if($count == 1){
    while($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
    }
    // Set session variables for the user's name and email
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    header("location:account.php?q=1");  // Redirect to "account.php" with query parameter q=1
} else {
    header("location:$ref?w=Wrong Username or Password");  // Redirect to the original page with an error message
}
?>
