<?php 
session_start();

if (isset($_POST["nom"])) {
    $_SESSION["nom"] = $_POST["nom"];
    header("location:loginSuite.php");
} else {
    session_destroy();
    header("location:login.html");
}
?>
