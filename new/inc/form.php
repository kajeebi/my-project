<?php

$firstName =            $_POST['firstName'];
$lastName =             $_POST['lastName'];
$email  =               $_POST['email'];

if(isset($_POST['submit'])){

    $firstName =            mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName =             mysqli_real_escape_string($conn,$_POST['lastName']);
    $email  =               mysqli_real_escape_string($conn,$_POST['email']);

$errors=[
   'firstNameErrors' => '',
   'lastNameErrors' => '',
   'emailErrors' => '',

];

$sql= "INSERT INTO users(firstName, lastName, email)
VALUES ('$firstName','$lastName','$email')";


//تحقق الاسم الاول
if(empty($firstName)){
    $errors['firstNameError']= 'يرجى ادخال الاسم الاول';
}
//تحقق الاسم الاخير
if(empty($lastName)){
    $errors['lastNameError']= 'يرجى ادخال الاسم الاخير';
}
//تحقق الايميل
if(empty($email)){
    $errors['emailError']= 'يرجى ادخال الايميل';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['emailError']= 'يرجى ادخال الايميل صحيح';
}



else{
    if(mysqli_query($conn,$sql)){
    header('Location: ' . $_SERVER['PHP_SELF']);
    }else{
        echo  'Error: ' .mysqli_error($conn);
    }
} 
}
?> 
