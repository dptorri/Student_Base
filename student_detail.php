<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
include 'another_php_file.php'?>
    <title>PHP Challenge</title>
</head>
<body>
    <h1>Register now!</h1>
    <p>Form to create a new user (student)</p>
    <form>
        <label>Name : </label><input type="text" name="firstname" id="f_name" placeholder="e.g. John">
        <label>Surname : </label><input type="text" name="lastname" id="l_name" placeholder="e. g. Smith">
        <label>Email : </label><input type="email" name="email" id="email" placeholder="e.g. john@example.com">
        <label>Birthday : </label><input type="date" name="birthdate" id="age" placeholder="e.g. 13/01/1980...">
    </form>
</body>
</html>