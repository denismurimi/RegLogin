<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 09/09/2018
 * Time: 07:04 PM
 */
require_once('connect.php');

if ((isset($_POST["username"])) && (isset($_POST["password"]))) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $loginQuery = "SELECT * FROM `register` WHERE `username`='$username' AND `password`='$password'";

    try {
        $loginResult = mysqli_query($con, $loginQuery);
        if (mysqli_num_rows($loginResult) == 1) {
            // login successful

            // start session
            session_start();
            while ($row = mysqli_fetch_assoc($loginResult)) {
                $_SESSION["username"] = $row["username"];
            }

            // redirect to home
            header("location: home.php");
        } else {
            // wrong username or password
            echo "wrong username or password";
        }
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
} else {
    echo "insufficient login data";
}