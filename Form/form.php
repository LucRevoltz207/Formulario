<?php
if (isset($_POST['submit']))
{
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $result = mysqli_query($conexao, "INSERT INTO Pessoa(Nome_Pessoa, Email_Pessoa, Idade_Pessoa) 
    VALUES ('$nome', '$email', '$idade')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Fofinho</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(24, 20, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bdb8b8;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03f40f;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03f40f,
              0 0 25px #03f40f,
              0 0 50px #03f40f,
              0 0 100px #03f40f;
}

.login-box a span {
  position: absolute;
  display: block;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }

  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(1) {
  bottom: 2px;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03f40f);
  animation: btn-anim1 2s linear infinite;
}
#button {
    background-color: rgba(24, 20, 20, 0.987);
    color: rgba(24, 20, 20, 0.987);
    border: none; /* Remova a borda */
    box-shadow: none;

}


    </style>
</head>
<body>

    <h1>Teste Fofinho</h1>
<div class="login-box">
 
  <form action="form.php" method="POST">
    <div class="user-box">
      <input type="text" id="nome" name="nome" required="">
      <label>Nome</label>
    </div>
    <div class="user-box">
      <input type="text" id="email"name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="number" id="idade" name="idade" required="">
      <label>Idade</label>
    </div>
    <button type="submit"name="submit" id="button">
    <center>
    <a> SEND
       <span></span>
    </a></center>
</button>
  </form>
</div>
<!--
    <form action="form.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <button type="submit"name="submit"></button>
    </form>-->

</body>
</html>
