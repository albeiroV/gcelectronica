<?php
// Conexión a la base de datos
require_once 'conexion.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result){
        // Iniciar sesión
        session_start();
        $_SESSION['username'] = $username;
        header('location: inventario.php');
    }else{
        echo 'Credenciales incorrectas';
    }
}

?>


<html>
<head>
<style>
  /* Estilos para el formulario de inicio de sesión */
  form{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 50px;
    padding: 20px;
  }
  label{
    font-size: 1.2em;
    margin: 10px;
  }
  input[type="text"], input[type="password"]{
    font-size: 1.2em;
    padding: 5px;
    margin: 10px;
  }
  input[type="submit"]{
    padding: 5px 10px;
    font-size: 1.2em;
    background-color: #4CAF50;
    color: white;
    border: none;
    margin: 20px;
    cursor: pointer;
  }
</style>

</head>
<body>
  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Log in">
  </form>
</body>
</html>
