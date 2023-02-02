<!DOCTYPE html>
<head>S
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form action="#" method="post">
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="staticEmail" value="" name='login'>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name='passw'>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Авторізуватись</button>
    </form>
</div>
<?php
    $login=$_POST['login']??'';
    $passw=md5($_POST['passw'])??'';
    echo $login;
    echo"<hr>";
    echo $passw;
?>

</body>