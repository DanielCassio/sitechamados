<?php
 $servername = "127.0.0.1";
 $database = "db_site";
 $username = "root";
 $password = "";
 // Criar conexao
 $conn = mysqli_connect($servername, $username, $password, $database);
 // Checando conexão
 if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
 }
  


    $nome   = $_POST ["f_nome"];
    $nucleo = $_POST ["f_nucleo"];
    $setor  = $_POST ["f_setor"];
    $tel    = $_POST ["f_tel"];
    $desc   = $_POST ["f_desc"];
    $email  = $_POST ["f_email"];
    



 $sql = "INSERT INTO chamado (nome,email,nucleo,setor,tel,descr) VALUES ('$nome', '$email','$nucleo','$setor','$tel','$desc')";
 if (mysqli_query($conn, $sql)) {
       echo "Gravado com sucesso ";
 } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);
 


?>