<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hungry_login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<form action='register_logic.php' name='register_logic' method="POST">
    <label> username: </label>
    <input type="text" name="username" placeholder="username" required>
    <label> password: </label>
    <input type="password" name="password" placeholder="password" required>
    <label> e-mail: </label>
    <input type="text" name="email" placeholder="mail" required>
    <input type="submit" value="register">
</form>
</body>
</html>