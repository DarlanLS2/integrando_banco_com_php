<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $marca = $_POST["marca"];
      $modelo = $_POST["modelo"];
      // Conexão com banco
      $host  = "localhost:3306";
      $user  = "root";
      $pass  = "";
      $base  = "carros";
      $conexao  = mysqli_connect($host, $user, $pass, $base);
      // Query
      $input = mysqli_query($conexao, "INSERT INTO Carros (marca, modelo) VALUES ('$marca', '$modelo');");
      mysqli_close($conexao); // Encerrando conexão com o banco
      echo "<center><h1>Cadastro realizado</h1></center>";
      // script para redirecionar o user para a pagina de exibição da tablela
      echo 
      "<script>
          setTimeout(function() {
          window.location.href = \"http://localhost/integracao_BD_php/exibir.php\";
          }, 1000);
      </script>";
    }
  ?>
</body>
</html>