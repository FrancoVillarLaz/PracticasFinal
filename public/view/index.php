
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
  <!-- Jquery -->  
   <script src="/public/view/js/jquery-3.7.1.js"></script>
   
   <script src="/public/view/js/index.js"></script>
   
   <script src="/public/view/js/carrusel.js"></script>
  
   <link rel="stylesheet" href="/public/view/css/style1.css">

  </link>

  
    <title>Cyber</title>
  </head>
  
  <body>
    
    <nav class="navbar fixed-top navbar-expand-lg bgnav">
      <div class="container">
        <a class="navbar-brand" href="#">Cyber</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Membresias</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/public/controller/registro_controller.php">login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/public/view/html/foro.html">Foro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/public/controller/crearjuego_controller.php">Agregar juego</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu text-light bg-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item drophover text-light bg-dark" href="#">Accion</a></li>
                <li><a class="dropdown-item drophover text-light bg-dark" href="#">Historia</a></li>
                <li><a class="dropdown-item drophover text-light bg-dark" href="#">Deporte</a></li>
              </ul> 
            </li> 
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a class="nav-link active" href="/public/view/html/perfil.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 448 512">
                  <!-- Inserta tu icono SVG para iniciar sesión aquí -->
                  <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 576 512">
                  <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
              </a>
              <ul class="dropdown-menu text-light bg-dark" aria-labelledby="navbarDropdownMenuLink">
                
                <aside class="carrito-container">
                  <div class="titulo-container">
                    <p class="titles">Lista de compras</p>
                  </div>
              
                  <div class="listacarrrito">
                    
                    <div id='carrito' class="carrito">
                      <div id="imgcarrito" class="imgcarrito">
                      </div>
                      <p id="juegocarrito"></p>
                    </div>
                  </div>
                  <button id="total" class="pagarcarrito" onclick="mostrarCarrito()">Total a pagar</button>
                  <button id="cancelar" class="pagarcarrito" onclick="cancelarCompra()">Cancelar</button>

              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
      <div class="hero"> 
        
        <main>
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <h2 class="title">DESTACADO</h2>
                    <div class="carrusel" >
                        <img onmouseover="mostrar()" onmouseout="ocultar()" id="carrusel" class="img-fluid" src="/public/view/img/carrusel/kratos4k.jpg" alt="">
                      <button class="btn btn-anterior"  onmouseover="mostrar()" onmouseout="ocultar()"onclick="anterior()"><svg id="arrow" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg></button>
                      <button class="btn btn-siguiente" onmouseover="mostrar()" onmouseout="ocultar()" onclick="siguiente()"><svg  id="arrow" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg></button>
                        <div id="info" onmouseover="mostrar()"  onmouseout="ocultar()"  class="info">
                          <h1 id="nombre">GOD OF WAR</h1>
                          <p id="sinopsis">Kratos ha dejado atrás su venganza contra los dioses del Olimpo y vive ahora como un hombre en los dominios de los dioses y monstruos nórdicos. En este mundo cruel e implacable debe luchar para sobrevivir… y enseñar a su hijo a hacerlo también.</p>
                          <div id="precio" class="precio">$100</div>
                          <button id="btn-comprar" onclick="añadir()" class="btn-comprar btn-comprar-carrusel">Comprar</button>
                        </div>
                    </div>
                </div>
                
                  <div class="col">
                    <div class="row g-0 ">
                      <h2 class="title">PS-PLUS</h2>
                      <div class="card bg-dark">
                        <img src="/public/view/img/membresia/essential.jpg" class="card-img-top img-fluid" alt="...">
                      </div>
                    </div>
                    <div class="row text-center">
                      <br>
                    </div>
                    <div class="row  g-0">
                      <div class="card bg-dark">
                        <img src="/public/view/img/membresia/extra.jpg" class="card-img-top img-fluid" alt="...">
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row g-0">
                      <div class="card bg-dark">
                        <img src="/public/view/img/membresia/Deluxe.jpg" class="card-img-top img-fluid" alt="...">
                      </div>
                    </div>
                  </div>
            
                
        </main>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div> 
        <div class="cube"></div>
        <div class="cube"></div>

        <div class="hero">
         

          <div class="categorias">
            <h3 class="title">DESCUENTOS</h3>
            <h3 class="title anticipado">ACCESO ANTICIPADO</h3>
  
          </div>
        <section class="tienda">
          
          
          <div class="galeria">
                <div class="imagen active" style="background-image: url(/public/view/img/juegos/batman.jpg);">
                <p class="imagen-precio">100</p>
                <button class="imagen-boton">Comprar</button>
                </div>
                <div class="imagen" style="background-image: url(/public/view/img/juegos/death.jpg);">
               <p class="imagen-precio">100</p>
               <button class="imagen-boton">Comprar</button>
                </div>
              <div class="imagen" style="background-image: url(/public/view/img/juegos/dios.jpg);">
                <p class="imagen-precio">100</p>
                <button class="imagen-boton">Comprar</button>
              </div>  
              <div class="imagen" style="background-image: url(/public/view/img/juegos/fc24.png);">
                <p class="imagen-precio">100</p>
                <button class="imagen-boton">Comprar</button>
              </div>
            </div>

              <div class="galeria">
                <div class="imagen" style="background-image: url(/public/view/img/juegos/fifa\ 23.jpg);">
                  <p class="imagen-precio">100</p>
                  <button class="imagen-boton">Comprar</button>
                </div>
                <div class="imagen" style="background-image: url(/public/view/img/juegos/forza.jpg);">
                  <p class="imagen-precio">100</p>
                  <button class="imagen-boton">Comprar</button>
                </div>
                <div class="imagen" style="background-image: url(/public/view/img/juegos/nba2.jpg);">
                  <p class="imagen-precio">100</p>
                  <button class="imagen-boton">Comprar</button>
                </div>
                <div class="imagen" style="background-image: url(/public/view/img/juegos/residencia.jpg);">
                  <p class="imagen-precio">100</p>
                  <button class="imagen-boton"> Comprar</button>
                </div>
              </div>
              
          
          <div class="galeriaCel">
          
            <img src="/public/view/img/juegos/asesino.jpg" alt="">
            
          </div>
        </section>
        
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
        </div>

        <div class="hero"> 

          <footer>
            <div class="contact">
              <img src="/public/view/img/contacto/lorenzo-herrera-p0j-mE6mGo4-unsplash.jpg" alt="">
             <div class="form">
              <h1>Contacto</h1>
              
              <div class="inputBx">
                  <p>Nombre</p>
              <input type="tel" name="" placeholder="Nombre Completo" id="">
              </div>
          
              <div class="inputBx">
                  <p>Gmail</p>
                  <input type="tel" name="" placeholder="Gmail Completo" id="">
                </div>
          
                  <div class="inputBx">
                      <p>Mensaje</p>
                       <textarea name="" id="" cols="30" rows="10"></textarea>
                  </div>
          
                  <div class="inputBx">
                    <input type="submit" value="Enviar">
                  </div>
             
              </div> 
          </div>
          
          </footer>

          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
    </div>
    </div>

    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> 
<script src="/public/view/js/galeria.js"></script>

</body>
</html>
