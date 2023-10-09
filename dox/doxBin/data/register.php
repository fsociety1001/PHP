 <?php
 $nomeServer = 'localhost';
 $usuario = 'root';
 $senha = '';


 $conn = new mysqli($nomeServer, $usuario, $senha, 'mydb');


 if ($conn->connect_error) {
     die('Connection failed: ' . $conn->connect_error);
 }

 echo 'Conectado com sucesso!';
 if (isset($_POST['submit'])) {
    mysqli_query(
        $conn,
 "INSERIR EM USUÁRIOS  (primeiro, sobrenome, email, usuario, genero) VALUES('$_POST[primeiro]', '$_POST[sobrenome]', '$_POST[email]', '$_POST[usuario]', '$_POST[genero]')"
    );
 }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
</head>
<body>
    <form action="/handleRegister.php" method="post">  
    Primeiro:<input type="text" name="primeiro"><br>
    Sobrenome:<input type="text" name="sobrenome "><br>
    Email:<input type="email" name="email"><br>
    Username: <input type="text" name="usurario"><br>
    <label for="gender">Gênero :
        Masculino:<input type="radio" value="male" name="genero">
        Feminino:<input type="radio" value="female" name="genero"><br>
    </label>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>
