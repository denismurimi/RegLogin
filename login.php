<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>Fill in the details below to Login</h1>
</div>

<form method="post" action="loginuser.php">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <td><input type="submit" class="textInput" value="Login"></td>
        </tr>
    </table>
</form>


</body>
</html>