<?php
//session_start();
require 'vendor/Avtor.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Login</label><input type="text" name="login" placeholder="Enter your login">
        <label>Password</label><input type="password" name="password" placeholder="Enter your password">
        <button type="submit">Sign in</button>
        <?php
        if (isset($_SESSION['message'])) {$_SESSION['message']="Реєстрація пройшла успішно";  echo "<p>". $_SESSION['message']."</p>"; unset($_SESSION['message']);};
                ?>
        <p>
        Don't have an account? - <a href="register.php">register</a>
        </p>
    </form>
</body>
</html>
<?php
$usl1=isset($_POST['login']);
$usl2=isset($_POST['password']);

if ($usl1&&$usl2) {
    $_SESSION['login']=$_POST['login']; $_SESSION['password']=$_POST['password'];

    $avtorize=new \vendor\Avtor();
   
    var_dump($avtorize);
    // echo $_SESSION['login']; die();
    if (!($avtorize->findUser())){header('https://diagnost.virtlabse.com');};
}
?>
