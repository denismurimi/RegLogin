<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h1>Fill in the details below to Register</h1>
</div>

<form method="post" action="registeruser.php">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput"></td>
        </tr>
        <tr>
            <td>Confirm Email:</td>
            <td><input type="email" name="cemail" class="textInput"></td>
        </tr>
        <tr>
            <td>ID Number:</td>
            <td><input type="number" name="idnumber" class="textInput"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="password2" class="textInput"></td>
        </tr>
        <tr>
            <td><input type="submit" class="textInput" value="Register"></td>
        </tr>
    </table>
</form>

</body>
</html>