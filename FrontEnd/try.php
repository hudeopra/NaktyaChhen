<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $input = 'password';
    $password = password_hash($input, PASSWORD_DEFAULT);
    $ver = password_verify('iloveyouas;iubjs', $password);
    echo $password;
    echo "<br>";
    echo $ver ? 'Password verified' : 'Password verification failed';
    ?>
</body>
</html>
