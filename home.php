<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h1>You have been Logged in</h1>
</div>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION["username"]; ?> </h4>
</div>

<form method="post" action="logout.php">
    <table>
        <tr>
            <td><input type="submit" class="textInput" value="Logout"></td>
        </tr>
    </table>
</form>

</body>
</html>