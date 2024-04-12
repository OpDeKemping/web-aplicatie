<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hungry_login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<form action='login_logic.php' name='login_logic' method="POST">
    <label> username: </label>
    <input type="text" name="username" placeholder="username" required>
    <label> password: </label>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="login">
</form>
</body>
</html>