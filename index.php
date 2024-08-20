<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tonos & Texturas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="img-box">
      <img src="img/mimis.jpeg" alt="">
    </div>
    <div class="content-box">
      <div class="content">
        <h2>Inicio</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-box">
            <label for="inputUserName">Correo:</label>
            <input name="email" type="email" placeholder="Ingrese su correo..." id="inputUserName">
          </div>

          <div class="input-box">
            <label for="inputPass">Contraseña:</label>
            <input name="password" type="password" placeholder="Ingrese su contraseña..." id="inputPass">
          </div>

          <div class="input-box">
            <input type="submit" value="Iniciar">
          </div>

          <div class="input-box">
            <label for="inputPass">¿No tienes una cuenta?</label>
            <div><a href="registro.php">Crea una aqui</a></p></div>
          </div>

          <div class="social-media">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php'; 

    
    $usuario = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM texturas WHERE email='$usuario' AND password='$password'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        
        $_SESSION['usuario'] = $usuario;
        header("Location: inicio.php");
        exit();
    } else {
        ?>
        <script>
            alert("ERROR");
        </script>
        <?php
        $error_message = "Usuario o contraseña incorrectos";
    }
 
    $conexion->close();
}
?>