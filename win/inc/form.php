<?php
$errors = [
    "firstnameError" => '',
    "lastnameError" => '',
    "emailError" => '',
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';

    if (empty($firstname)) {
        $errors['firstnameError'] = 'ادخل الاسم الاول';
    }
    if (empty($lastname)) {
        $errors['lastnameError'] = 'ادخل الاسم الاخير';
    }
    if (empty($email)) {
        $errors['emailError'] = "ادخل الايميل";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'لم تدخل الايميل بشكل صحيح!';
    }

    if (!array_filter($errors)) {
        $firstname = mysqli_real_escape_string($conn, $firstname);
        $lastname = mysqli_real_escape_string($conn, $lastname);
        $email = mysqli_real_escape_string($conn, $email);

        $sql = "INSERT INTO users(firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
            if (mysqli_query($conn, $sql)) {
            header('Location:'. $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "خطأ في قاعدة البيانات: " . mysqli_error($conn);
        }
        }


}
?>
