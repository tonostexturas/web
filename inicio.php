<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonos & Texturas</title>
    <link rel="stylesheet" href="style2.css">
    <script src="bootstrap.bundle.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css">
    

</head>
<div>
      <section id="section-home">
        <div class="contenedor-inicio">
            <div id="tonos" class="contenedor-barra">
                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                    <div class="container-fluid">

                    <a href="tienda.php" class="">
                      <i class="fas fa-shopping-cart fa-2x"></i>
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
                      <a class="navbar-brand" href="">TONOS</a>

                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul></ul>
                      <ul class="navbar-nav">
                          <li class="nav-item">
                            <a href="#bebelol" class="nav-link"><button type="button" class="nav-link">Productos</button></a>
                          </li>
                          <ul>

                          </ul>

                          <li class="nav-item">
                            <a href="#look" class="nav-link"><button type="button" class="nav-link">Looks</button></a>
                          </li>
                          <ul></ul>

                          <li class="nav-item">
                            <a href="#servicios" class="nav-link"><button type="button" class="nav-link">Servicios</button></a>
                          </li>
                          <ul></ul>

                          <li class="nav-item">
                            <a href="#contacto" class="nav-link"><button type="button" class="nav-link">Contacto</button></a>
                        </li>
                        <ul></ul>

                          <li class="nav-item">
<a class="nav-link"><button  class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Cerrar sesión</button></a>

</div>
</nav>













  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Esta seguro de cerrar sesión?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="logout.php"><button type="button" class="btn btn-primary">Cerrar sesión</button></a>
        </div>
      </div>
    </div>
  </div>               
                          </li>

                        </ul>
                      </div>
                   
            <div class="contenedor-mensaje">
              

            



        </div>         
        </div>
    </section>
    <br id="bebelol">
    <br>

<br>
<marquee behavior="Alternate" direction="right" bgcolor="white" scrolldelay="60"> <h1 id="nuevos-productos">NUEVOS PRODUCTOS</h1></marquee> 
<br>
<br>
<br>
<div class="wrapper">
    <img id="bebe" src="img/dior.jpg" alt="">
<div class="text-box">
    <h2>Labial brillante Dior Addict Lip Maximizer</h2>
     El icónico brillo de labios Dior, un verdadero tratamiento hidratante y repulpante con efecto volumen máximo. Su fórmula, enriquecida con aceite de cereza y ácido hialurónico, está compuesta por un 90 %* de ingredientes de origen natural.
    <p>   Hidratados durante 24 horas**, sublimados con un brillo espejo, los labios están visiblemente alisados, como repulpados.</p> 
</div>

</div>
<br>
<br>
<br>

<br>
<br>
<br>

<div class="wrapperdos">
    <img id="bebedos" src="img/loreal.jpg" alt="">
<div class="text-box">
    <h2>L’Oréal Paris Make-up Designer Fresh Wear</h2>
    <p>  Se trata de una base de maquillaje que tiene una larga duración y una cobertura completamente modulable dependiendo de cómo lo apliques.
       Tiene una fórmula especial con una gran concentración de pigmentos, que se ajustarán fácilmente a tu tono de piel, y así podrás conseguir tu maquillaje perfecto en todo momento.</p> 

</div>

</div>
<br>
<br>
<br><br><br><br>


<div class="wrapper">
    <img id="bebe" src="img/ysl.jpg" alt="">
<div class="text-box">
    <h2>Yves Saint Laurent Rouge Volupte Shine Lipstick, 14 Corail In Touch</h2>
    Labial líquido estilo tinta SuperStay Matte Ink Liquid Lipstick te brinda un acabado mate impecable en una gama de tonos supersaturados.
    <p>   Píntate los labios en el tono mate líquido más saturado hasta 16 horas SuperStay Matte Ink™ cuenta con una exclusiva brocha en forma de flecha que proporciona una aplicación precisa y está disponible en una gama de tonos súper saturados.</p> 

</div>

</div>
<br>
<br>

<br id="look">
<br>
<br >
<div class="container">
  <style>

#cards{
    box-shadow: 9px 10px 18px 0px rgba(0, 0, 0, 0.75);
-webkit-box-shadow: 9px 10px 18px 0px rgba(0, 0, 0, 0.75);
-moz-box-shadow: 9px 10px 18px 0px rgba(0, 0, 0, 0.75);
}
  </style>
    <div class="row" >
        <div class="col-12">
            <h1  class="page-title">LOOKS Y CONSEJOS
           <br> DE MAQUILLAJE</h1>
        <div class="row" id="cards">
        <div class="image-container col-lg-4 col-md-4 col-6 my-3">
            <a href="https://www.youtube.com/watch?v=3sbLJgq6pog" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-6 my-3">
                <img src="img/maku.jpg" class="img-fluid card" height="1000px" >
                <div class="text-overlay">MAKE-UP TIPS</div>
            </a>
            </div>

            <div class="image-container col-lg-4 col-md-4 col-6 my-3">
            <a href="https://www.youtube.com/watch?v=Zf6jNkyygG0" data-toggle="lightbox"  data-gallery="example-gallery" class="col-lg-4 col-md-4 col-6 my-3">
                <img src="img/ojos.jpg" class="img-fluid card" >
                <div class="text-overlay">MAKE-UP OJOS</div>
            </a>
            </div>

            <div class="image-container col-lg-4 col-md-4 col-6 my-3">
            <a href="https://www.youtube.com/watch?v=lYsd5d49gFc" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-6 my-3">
                <img src="img/base.jpg" class="img-fluid card" >
                <div class="text-overlay">COMO SABER MI TONO DE BASE</div>
            </a>
            </div>


            <div class="image-container col-lg-4 col-md-4 col-6 my-3">
            <a href="https://www.youtube.com/watch?v=G2Ho0ZgankE" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-6 my-3">
                <img src="img/correc.jpg" class="img-fluid card" id="imgmal">
                <div class="text-overlay">UN CORRECTOR PARA TU TONO DE PIEL</div>
            </a>
            </div>


            <div class="image-container col-lg-4 col-md-4 col-6 my-3">
            <a href="https://www.youtube.com/watch?v=0SXznbzOCc0" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-6 my-3">
                <img src="img/la.jpg" class="img-fluid card">
                <div class="text-overlay">MAKE-UP DIOR</div>
            </a>
            </div>

            <div class="image-container col-lg-4 col-md-4 col-6 my-3">
            <a href="https://www.youtube.com/watch?v=P9ZdCKQQZWI" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-4 col-md-4 col-6 my-3">
                <img src="img/makup.jpg" class="img-fluid card" >
                <div class="text-overlay">MAKE-UP BÁSICO</div>
            </a>
            </div>

        </div>
    </div>
</div>
</div>





<br>
<br>
<br>
<br><br><br><br><br>

<br>
<br>
<br>
<br>
<br>
<br id="servicios">
	<!-- Content -->
    <br><br>
    <div ></div>
    <br><br>
<div class="container container-web-page">
    <h3   class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros servicios</h3>
    <br>
    <div  class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <p  class="text-center"><i class="fas fa-shipping-fast fa-5x"></i></p>
            <h5  class="text-center text-uppercase poppins-regular font-weight-bold">Envíos a domicilio</h5>
            <p class="text-center">En Tonos & Texturas, te ofrecemos una experiencia de compra inigualable con nuestro servicio de envío gratuito a toda la república. Nos encargamos de que tus productos lleguen a tu puerta de manera rápida y segura, sin costos adicionales. Utilizamos empaques resistentes y colaboramos con transportistas confiables para asegurar que cada pedido llegue en perfectas condiciones. Además, cada envío incluye un número de rastreo para que puedas seguir el estado de tu paquete en tiempo real. Tu satisfacción es nuestra prioridad, por lo que nos esforzamos en brindarte un servicio eficiente y sin preocupaciones. ¡Compra con confianza!</p>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <p class="text-center"><i class="fas fa-comment-dollar fa-5x"></i></p>
            <h5  class="text-center text-uppercase poppins-regular font-weight-bold">Ventas al por mayor</h5>
            <p class="text-center">¿Quieres comprar en grandes cantidades y ahorrar un montón? En Tonos & Texturas te lo ponemos fácil con nuestras opciones de mayoreo. Aprovecha precios especiales y descuentos geniales solo para compras a granel. Te ofrecemos flexibilidad y un trato personalizado para que todo sea mucho más sencillo. Ya sea que necesites mucho stock o solo quieras aprovechar nuestras ofertas, estamos aquí para ayudarte. Mándanos un mensaje para ver cómo podemos hacer que tus compras sean más baratas y fáciles. ¡Estamos aquí para echarte una mano y que tu negocio vaya sobre ruedas!



</p>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <p class="text-center"><i class="fas fa-store-alt fa-5x"></i></p>
            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Reservaciones de local</h5>
            <p class="text-center">En Tonos & Texturas, contamos con sucursales en todo el país para que siempre encuentres lo mejor en maquillaje.
                 Visítanos en Ciudad de México (Polanco y Coyoacán)
                Monterrey (San Pedro y Centro)
                Guadalajara (Chapalita y Zapata)
                Cancún (Hotelera y Downtown) 
                Puebla (Angelópolis y Centro Histórico). 

                <p>Cada ubicación ofrece nuestra gama completa de productos y asesoría experta en belleza. ¡Te esperamos para brindarte una experiencia de compra única y personalizada!</p>
        </div>
    </div>
</div>



<br>








<br>
<br>
<br><br><br><br>



        </div>




















<div class="container" id="contacto">

    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #ff44b766"
            >
      <section
               class="d-flex justify-content-between p-4"
               style="background-color: #ff309e6b"
               >
        <div class="me-3">
          <span>Contactanos en nuestras redes sociales:</span>
        </div>
        <div>
          <a href="https://www.facebook.com/share/AbhbFTAKU3e55WSQ/?mibextid=qi2Omg" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://x.com/tonosytexturas?t=x6coko2NT-Dm-usGhThD8Q&s=08" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.instagram.com/tonostexturas3357m?igsh=MWplNzZvYWZ5Y3pwcQ==" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.tiktok.com/@tonostexturas?_t=8ozl034v71K&_r=1" class="text-white me-4">
          <i class="fa-brands fa-tiktok"></i>
          </a>
       
        </div>
      </section>
      <section class="">
        <div class="container text-center text-md-start mt-5 mb-4 ">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-0">

              <h6 class="text-uppercase fw-bold">Tonos & Texturas</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
               Somos una empresa que se encarga de informarte y dar a conocer al publico
               lo mejor sobre todo tipo de maquillaje
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Nuestros productos:</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-white">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-white">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-white">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-white">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-white">Help</a>
              </p>
            </div>  
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> Taxco, Guerrero</p>
              <p><i class="fas fa-envelope mr-3"></i> neytorcarlos@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 52 762 111 0637</p>
              <p><i class="fas fa-phone mr-3"></i> + 52 762 104 3386</p>
            </div>
          </div>
        </div>
      </section>
    </footer>
  
  </div>
























   
</body>
</html>
