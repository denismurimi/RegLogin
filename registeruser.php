<?php

require_once('connect.php');

if ((isset($_POST['username'])) && (isset($_POST['email'])) && (isset($_POST['cemail'])) && (isset($_POST['idnumber'])) && (isset($_POST['password'])) && (isset($_POST['password2']))) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $cemail = mysqli_real_escape_string($con, $_POST['cemail']);
    $idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['password2']);

    if ($username == "") {
        echo "Please enter your Username ";
    } else {
        if ($email == "") {
            echo "Please enter email ";
        } else {
            if ($cemail == "") {
                echo "Please confirm your email ";
            } else {
                if ($idnumber == "") {
                    echo "Please enter your ID";
                } else {
                    if ($password == "") {
                        echo "Please enter your password";
                    } else {
                        if ($cpassword == "") {
                            echo "Please confirm your password";
                        } else {
                            if ($email == $cemail) {
                                if ($password == $cpassword) {
                                    $password = md5($password); //this is to harsh the password before storing it in the DB
                                    $insert = "INSERT INTO `register`(`username`, `email`, `kitambulisho`, `password`) VALUES ('$username', '$email', '$idnumber', '$password')";
                                    $okay = "okay";
                                    try {
                                        mysqli_query($con, $insert);
                                    } catch (Exception $exception) {
                                        $okay = "not_okay";
                                        echo $exception->getMessage();
                                    } finally {
                                        if ($okay == "okay") {
                                            // user was inserted
                                            echo "Your data has been inserted successfully";
                                        } else {
                                            // user was not inserted
                                            echo "An error occured";
                                        }
                                    }
                                } else {
                                    echo "Passwords do not Match";
                                }
                            } else {
                                echo "Emails do not Match";
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    echo "Insuficient data to save on the DB";
}