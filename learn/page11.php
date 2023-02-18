<form name="f1" action="#" method="post">
	<input type="text" name="login" placeholder="login"><br>
	<input type="password" name="pass" placeholder="password"><br>
	<button type="submit">Зайти</button>
<?php
	session_start();
	$login=$_POST['login']??'';
	$pass=$_POST['pass']??'';
	$_SESSION['login']=$login;
	$_SESSION['pass']=$pass;