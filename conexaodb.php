<?php  
   /**
    $mysql = new mysqli('127.0.0.1', 'root', '', 'db_site');
    $mysql->set_charset('utf8');
    
    if($mysql == TRUE) {
        echo "";
    } else {
        echo "Erro na conexão";
    }**/
 
    $connect = mysqli_connect('db_site','root','root');

  // Tenta se conectar ao servidor MySQL
  mysqli_connect('127.0.0.1', 'root', '') or trigger_error(mysqli_error());
  // Tenta se conectar a um banco de dados MySQL
  mysqli_select_db($connect, 'usuario') or trigger_error(mysqli_error());

  $usuario = mysqli_real_escape_string($_POST['usuario']);
  $senha = mysqli_real_escape_string($_POST['senha']);


  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '.$usuario .') AND (`senha` = '. sha1($senha) .') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }


// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: atendimento.html"); exit;
  }


 ?>
   