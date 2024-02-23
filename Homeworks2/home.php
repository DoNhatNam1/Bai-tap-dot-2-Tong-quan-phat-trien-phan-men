// home.php
<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
    if (isset($_COOKIE["user"])) {
        echo "Your username is stored in a cookie: " . $_COOKIE["user"];
    }
} else {
    header("Location: index.php");
    exit;
}
?>