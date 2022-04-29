<?php
$login = $_POST['login'][0];
$senha = md5($_POST['senha'][0]);
$connect = mysqli_connect('db_site','root','root');
$db = mysqli_select_db('db_site');
  if (isset($entrar)) {

    $verifica = mysqli_query("SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:atendimento.html");
      }
  }
?>