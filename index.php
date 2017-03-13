<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=divice-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>ANEAES</title>
</head>
<body>
<div class="wrap">
  <header id="header" class="header"> <!-- header -->
    <section class="logo">
      <figure class="logotipo1">
        <img src="images/logo392x106White.png" alt="Logo Aneaes">
      </figure>
      <figure class="logotipo2"> <!-- logotipo -->
        <img src="images/gobiernoLogoEspanolGuaraniSmWhiteV2.png" alt="Logo Gobierno">
      </figure>
    </section>
    <nav class="navbar navbar-custom"><!-- menu -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Inicio</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Institucional <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="">Historia</a></li>
                <li><a href="">Concejo Directivo</a></li>
                <li><a href="">Misión</a></li>
                <li><a href="">Visión</a></li>
                <li><a href="">Organigrama</a></li>
                <!-- <li class="divider"></li>
                <li><a href="">Agregar</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Carreras Acreditadas <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{% url 'namecareers:list' %}">Listar</a></li>
                <li><a href="{% url 'namecareers:new' %}">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Programas Acreditados <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{% url 'resolutions:view' %}">Listar</a></li>
                <li><a href="{% url 'resolutions:new' %}">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Registro de Pares <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{% url 'nationalities:view' %}">Listar</a></li>
                <li><a href="{% url 'nationalities:new' %}">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aula Virtual</a>
            </li>
          </ul>
        </div>
    </nav>
  </header>
  <section id="portada"> <!-- portada -->
    <figure> <!-- acceso a la información pública -->
      <img src="images/accesoInformacionPublicaBtnGral.png" alt="">
    </figure>
    <figure>
      <img src="images/informacionPublicaBtnGral.png" alt="">
    </figure>
    <figure>
      <img src="images/denunciasBtn.png" alt="">
    </figure>
    <figure> <!-- 3 ultimas noticias Breves con imagenes -->
      <img src="images/noticias.jpg" alt="">
    </figure>
    <button>Tramites</button> <!-- botones tramites servicios compras publicas -->
    <button>Servicios</button>
    <button>Compras Públicas</button>
  </section>
  <section id="noticias"> <!-- noticias -->
    <h2 class="title">Noticias</h2> <!-- titulo noticias -->
    <article> <!-- noticias -->
      <img src="images/noticias.jpg" alt="Noticias1">
      <h3 class="title-a">Titulo noticas</h3>
      <p>Descripción</p>
    </article>
    <article> <!-- noticias -->
      <img src="images/noticias.jpg" alt="Noticias2">
      <h3 class="title-a">Titulo noticas</h3>
      <p>Descripción</p>
    </article>
    <article> <!-- twitts -->
      <p>twiter</p>
    </article>
  </section>
  <section> <!-- Galeria de fotos -->
    <img src="" alt="">
  </section>
</div>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>