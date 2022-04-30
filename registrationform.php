<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>REGISTER NOW</h3>
        <input type="text" name="name" required placeholder="enter your name">
        <input type="text" name="email" required placeholder="enter your email">
        <input type="text" name="password" required placeholder="enter your password">
        <input type="text" name="cpassword" required placeholder="reenter your password">
        <select name="user_type">
            <option value="buyer">buyer</option>
            <option value="seller">seller</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" value="register now" class="form-button">
        <a href="login_form.php">log in page</a>
</body>
</html>