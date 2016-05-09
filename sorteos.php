<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <title></title>
  </head>
  <body>
    <header class="semana">
      <p>!vamos en la semana Nº 1!</p>
    </header>
    <header class="mobile">
      <div class="ed-container">
        <div class="ed-item base-50"><img src="img/zuko.svg" alt=""/></div>
        <div class="ed-item base-50"><img src="img/livean.svg" alt=""/></div>
      </div>
    </header>
    <header>
      <div class="ed-container">
        <div class="ed-item base-100 web-50"><img src="img/logo2.png" class="logo"/></div>
        <div class="ed-item web-50 main-start cross-center">
          <nav>
			<?php
				include "menu.php";
			?>
          </nav>
        </div>
      </div>
    </header>
    <section class="indexW">
      <div class="ed-container">
        <div class="ed-item web-100"><img src="img/bg-vieja.jpg" alt="" class="clave"/>
          <div class="pizarra"><img src="img/pizarra.png" alt=""/></div>
          <div class="fecha">
            <p>DESDE EL 02 DE MAYO HASTA EL 01 DE JULIO</p>
          </div>
          <div class="premios-caja ayuda">
            <h1>Fecha de sorteo</h1>
            <p class="sorteos">Desde el lunes 2 de mayo hasta el viernes 1 de julio.</p><a href="bases.pdf" target="_blank" class="verbases">ver Bases</a>
          </div>
          <div class="info-semana"><img src="img/semana.png" alt=""/></div>
          <div class="huincha-premios"><img src="img/premios.png" alt=""/></div>
        </div>
      </div>
    </section>
    <footer class="mesa">
      <div class="ed-container no-padding full">
        <div class="ed-item web-50"></div>
      </div>
    </footer>
    <div class="marcas">
      <div class="ed-container no-padding full">
        <div class="ed-item base-50 web-50"><a href="http://www.tmluc.cl/" target="_blank" class="logos_foot"><img src="img/tmluc.jpg" alt=""/></a><a href="http://www.gruponutresa.com/" target="_blank" class="logos_foot"><img src="img/nutresa.png" alt=""/></a></div>
        <div class="ed-item base-50 web-50">
          <div class="facebook">
            <p>síguenos en: <a href="#"><img src="img/face.png" alt=""/></a><a href="#"><img src="img/facel.png" alt=""/></a></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
  $(function() {
  var pull = $('#pull');
  menu = $('nav ul');
  menuHeight = menu.height();
  $(pull).on('click', function(e) {
  e.preventDefault();
  menu.slideToggle();
  });
  });
  $(window).resize(function(){
  var w = $(window).width();
  if(w > 320 && menu.is(':hidden')) {
  menu.removeAttr('style');
  }
  });
  
      //- .ed-item.web-50
      //-   a(href="http://escueladigital.pe" target="_blank") Escuela Digital
</script>