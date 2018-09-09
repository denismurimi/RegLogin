#<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 09/09/2018
 * Time: 07:32 PM
 */

session_start();
if ((!(isset($_SESSION["username"]))) || (trim($_SESSION["username"]) == "")) {
    // redirect to login
    header("location: login.php");
    return;
}