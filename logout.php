<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 09/09/2018
 * Time: 07:28 PM
 */

// logout code
session_start();
session_unset();
session_destroy();
header("location: login.php");
return;