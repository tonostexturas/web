<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php"); 
    exit();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="tienda.css">
    <link rel="stylesheet" href="bootstrap.css">
    </head>
<body>
<br>
<br>
<br>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                    <div class="container-fluid">

                    <a href="inicio.php" class="">
                    <i class="fas fa-reply fa-2x"></i>

                </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <a class="navbar-brand" href="">TIENDITA</a>

                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul class="navbar-nav">
                          <li class="nav-item">
                            <a href="#bebelol" class="nav-link"><button type="button" class="nav-link"></button></a>
                          </li>
                          <ul>

                          </ul>

                          <li class="nav-item">
                            <a href="#look" class="nav-link"><button type="button" class="nav-link"></button></a>
                          </li>
                          <ul></ul>

                          <li class="nav-item">
                            <a href="#servicios" class="nav-link"><button type="button" class="nav-link"></button></a>
                          </li>
                          <ul></ul>

                          <li class="nav-item">
                            <a href="#contacto" class="nav-link"><button type="button" class="nav-link"></button></a>
                        </li>
                        <ul></ul>
                    <ul></ul>
<ul></ul>
<ul></ul>
<ul></ul>
<ul></ul>
                          <li class="nav-item">
<a href="http://localhost/texturas/" class="nav-link"><button  class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">COMPRAR PRODUCTOS</button></a>


</div>
</nav>
    <section class="contenedor">
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">POLVO SUELTO PRISME LIBRE</span>
                <img src="img/tienda/1.1.jpg" alt="" class="img-item">
                <span class="precio-item">$1,240</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">POLVO SUELTO ACABADO NATURAL</span>
                <img src="img/tienda/1.2.jpg" alt="" class="img-item">
                <span class="precio-item">$1,230</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">POLVO FIJADOR SUELTO</span>
                <img src="img/tienda/5.3.jpg" alt="" class="img-item">
                <span class="precio-item">$819.0</span>
                <a href=""></a><button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">POLVO FIJADOR SKIN FETISH</span>
                <img src="img/tienda/1.4.jpg" alt="" class="img-item">
                <span class="precio-item">$950.0</span>
                <a href="http://localhost/texturas/producto/polvo-fijador-skin-fetish/"><button class="boton-item">COMPRAR</button></a>
            </div>
            <div class="item">
                <span class="titulo-item">POLVO FACIAL SUELTO</span>
                <img src="img/tienda/1.5.jpg" alt="" class="img-item">
                <span class="precio-item">$870.0</span>
             <a href="http://localhost/texturas/producto/polvo-facial-suelto/">   <button class="boton-item">COMPRAR</button></a>
            </div>
            <div class="item">
                <span class="titulo-item">BAKING Y SETTING POWDER</span>
                <img src="img/tienda/1.6.jpg" alt="" class="img-item">
                <span class="precio-item">$925.0</span>
              <a href="http://localhost/texturas/producto/baking-y-setting-powder/"> <button class="boton-item">COMPRAR</button></a> 
            </div>
            <div class="item">
                <span class="titulo-item">SETTING LOOSE POWDER</span>
                <img src="img/tienda/1.7.jpg" alt="" class="img-item">
                <span class="precio-item">$780.0</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">MATTE LOOSE POWDER</span>
                <img src="img/tienda/1.8.jpg" alt="" class="img-item">
                <span class="precio-item">$470.0</span>
               <a href="http://localhost/texturas/producto/matte-loose-powder/"><button class="boton-item">COMPRAR</button></a> 
            </div>
            <div class="item">
                <span class="titulo-item">GLOW PLAY CUSHION BLUSH</span>
                <img src="img/tienda/5.1.jpg" alt="" class="img-item">
                <span class="precio-item">$779.0</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">LE' DEMI GLOW BAKER BLUSH</span>
                <img src="img/tienda/2.2.jpg" alt="" class="img-item">
                <span class="precio-item">$575.0</span>
              <a href="http://localhost/texturas/producto/le-demi-glow-baker-blush/">  <button class="boton-item">COMPRAR</button></a>
            </div>
            <div class="item">
                <span class="titulo-item">STICK BLUSH RUBOR EN BARRA</span>
                <img src="img/tienda/2.3.jpg" alt="" class="img-item">
                <span class="precio-item">$850.0</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">WONDER TINT MOUSSE</span>
                <img src="img/tienda/2.4.jpg" alt="" class="img-item">
                <span class="precio-item">$375.0</span>
                <button class="boton-item">ACOMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">AIR MATTE CREAM BLUSH</span>
                <img src="img/tienda/2.5.jpg" alt="" class="img-item">
                <span class="precio-item">$820.0</span>
              <a href="http://localhost/texturas/producto/air-matte-cream-blush/">  <button class="boton-item">COMPRAR</button></a>
            </div>
            <div class="item">
                <span class="titulo-item">STICK COLOR ADAPTIVE CKEEK</span>
                <img src="img/tienda/2.6.jpg" alt="" class="img-item">
                <span class="precio-item">$620.0</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">LOUMINOUS FOUNDATION</span>
                <img src="img/tienda/2.jpg" alt="" class="img-item">
                <span class="precio-item">$640.0</span>
               <a href="http://localhost/texturas/producto/louminous-foundation/"> <button class="boton-item">COMPRAR</button></a>
            </div>
            <div class="item">
                <span class="titulo-item">DOUBLE WEAR PLACE FPS 10</span>
                <img src="img/tienda/9.jpg" alt="" class="img-item">
                <span class="precio-item">$900.0</span>
               <a href="http://localhost/texturas/producto/double-wear-place-fps-10/"><button class="boton-item">COMPRAR</button></a> 

            </div>
      
            <div class="item">
                <span class="titulo-item">LOUMINOUS FOUNDATION MATE</span>
                <img src="img/tienda/4.jpg" alt="" class="img-item">
                <span class="precio-item">$630.0</span>
            <a href="http://localhost/texturas/producto/louminous-foundation-mate/">  <button class="boton-item">COMPRAR</button></a>  
            </div>
            <div class="item">
                <span class="titulo-item">WEIGHTLESS  FOUNDATION</span>
                <img src="img/tienda/5.jpg" alt="" class="img-item">
                <span class="precio-item">$1,300</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">PRISME MATTE FOUNDATION</span>
                <img src="img/tienda/12.jpg" alt="" class="img-item">
                <span class="precio-item">$1,200</span>
                <button class="boton-item">COMPRAR</button>
            </div>
            <div class="item">
                <span class="titulo-item">ALL HOURS FOUNDATION</span>
                <img src="img/tienda/10.jpg" alt="" class="img-item">
                <span class="precio-item">$1,400</span>
                <button class="boton-item">COMPRAR</button>
            </div>
        </div>
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Comprar<i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
</body>
</html>