<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Cadastrar usuario</title>
</head>
<body>
<main>
  <section class="container-admin-banner">
    <img src="img/logo-serenatto-horizontal.png" class="logo-admin" alt="logo-serenatto">
    <h1> Cadastrar usuario </h1>
    <img class= "ornaments" src="img/ornaments-coffee.png" alt="ornaments">
  </section>
  <section class="container-form">
  <form method="post">

    <label for="nome"> nome </label>
    <input type="text" id="nome" name= "nome" placeholder="nome" required>
    
    <label for="email">E-mail</label>
    <input type="email" id="email" name= "email" placeholder="Digite o seu e-mail" required>

    <label for="senha">Senha</label>
    <input type="password" id="senha"  name = "senha" placeholder="Digite a sua senha" required>

    <input type="submit" class="botao-cadastrar" name= "cadastro" value="Entrar"/>
  </form>

  </section>
  </body>
</html>
</main>
<?php
include 'usuario.php';
include 'conexao.php';
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
  $nome = $_POST ["nome"];
  $email = $_POST ["email"];
  $senha = $_POST ["senha"];

  $usuario = new usuario($conn);
  if ($usuario->cadastrar($nome, $email, $senha)){
    header ("Location: cadastrar-usuario-sucesso.php");
    exit ();
  }else{
    echo "erro! tente novamente!";
  }
}
?>
