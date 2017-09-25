<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
include 'lib/data-functions.php'?>
    <title>PHP Challenge</title>
</head>
<body>
<p style="color:red">
                <?php /*
                if ($_POST){
                    $errors = array();
                    if (empty($_POST['name'])){
                        $errors[] = 'You are missing the first name field!<br>';
                    } if (empty($_POST['surname'])){
                        $errors[] =  'You are missing the Surname field!<br>';
                    } if (empty($_POST['email'])){
                        $errors[] =  'You are missing the email field!<br>';
                    } if (empty($_POST['birthdate'])){
                        $errors[] =  'You are missing the birthdate field!<br>';
                        } else {$date = $_POST['birthdate'];}
                     
                    
                    if (empty($errors)){
                        header('Location:index.php?status=ok');
                        exit;
                    } else {
                        foreach ($errors as $error){
                            echo $error;
                        }
                    } //ends else
                }//ends main if
            */ ?></p>
    <h1>Register now!</h1>
    <p>Form to create a new user (student)</p>
    <form method="post">
    <label>Name : </label><input type="text" name="name" id="f_name" placeholder="e.g. John"><br>
    <label>Surname : </label><input type="text" name="surname" id="l_name" placeholder="e. g. Smith"><br>
    <label>Email : </label><input type="email" name="email" id="email" placeholder="e.g. john@example.com"><br>
    <label>Birthday : </label><input type="date" name="birthdate" id="age" placeholder="e.g. 13/01/1980..."><br>
    <label>Male </label><input type="radio" name="binary" value="1" /><br>
    <label>Female</label><input type="radio" name="binary" value="0" />

    <label>Country</label>
        <select>
                <option value="CL">Chile</option>
                <option value="CZ">Czech Republic</option>
                <option value="DE">Germany</option>
                <option value="00">Other</option>
        </select>
    <label for="terms">I accept the Terms</label><input type="checkbox" name="binary" value="1" checked="checked" />
    <input type="submit" value="Submit Registration" />
    </form>
    <h2>Retrieved Data</h2>
    <?php
    if($_POST['binary'] == 1){
        $gender = 'Female';}
        else { $gender = 'Male';}

    echo 'Name : '.$_POST['name'];
    echo '<br>Surname : ' . $_POST['surname'];
    echo '<br>Email : ' . $_POST['email'];
    echo '<br>Birthday : ' . $_POST['birthdate'];
    echo '<br>Gender : ' . $gender;?>
    
    var $student = array[
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'email' => $_POST['email'],
        'birthday' => $_POST['birthdate'],
        'gender' => $gender
    ];
    insert_data($student);    
    
</body>
</html>
