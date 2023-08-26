<?php 
session_start();  // Start a new or resume an existing session

if(isset($_SESSION['email'])){
    session_destroy();  // If "email" is set in the session, destroy the session
}

$ref = @$_GET['q'];  // used for return URLs,Get the value of the "q" query parameter from the URL

header("location:$ref");  // Redirect to the URL specified by the "q" parameter
?>