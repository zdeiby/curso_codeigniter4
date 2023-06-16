<!DOCTYPE html>
<html lang="en">
<head>
  <title>Encabezado con navegación completa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .fixed-top {
      position: fixed;
      top: -4px !important;
      right: 0;
      left: 0;
      z-index: 1030;
    }

    .submenu {
      display: none;
      position: absolute;
      z-index: 1;
    }

    .submenu.show {
      display: block;
    }

    .nav {
      position: relative;
      background:#ffff;
      border-bottom: 2px solid #00B0F6;
    }

    .sub {
      background: #ffffff;
      opacity: 1;
      text-decoration: none;
      color: inherit;
    }

    .liT:hover {
      background: #e5e5e5;
    }

    li {
      list-style: none;
    }

    a {
      text-decoration: none;
      color: black !important;
    }

    .div1 {
      background: #ffffff;
      opacity: 1;
      border: 2px solid #e5e5e5;
      border-radius: 8%;
    }

    .navbar>.container, .navbar>.container-fluid {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 13px !important;
    }

    .custom-button {
      border: 1px solid #00B0F6 !important;
      background: #00B0F6 !important;
    }

    .custom-button:hover {
      background: #008CC3 !important;
    }
    .tamano{
        font-size:20px;
    }
    .img2{
    height: 300px !important;
    border-radius:2% ipor !important;
}
  </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-light fixed-top nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/03/Open-Graph-.png" alt="" width="150" height="100">
            </a>
            <button id="myButton" class="navbar-toggler" type="button">
  <span class="navbar-toggler-icon"></span>
</button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav tamano">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ¿Quienes somos?
                        </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="/contactenos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactenos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a class="dropdown-item liT" href="/ufm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad Familia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/multimedia">Multimedia</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="">
                    <a href="/login"><button type="button" class="btn btn-primary custom-button">Login UFM</button></a>
                </div>
            </div>
        </div>
    </nav>
</div>


<br>

<script>
    function showSubMenu(elem) {
        elem.querySelector('.submenu').classList.add('show');
    }
    function hideSubMenu(elem) {
        elem.querySelector('.submenu').classList.remove('show');
    }
</script>
<script>
  // Obtener el botón y el encabezado por su ID
  var button = document.getElementById('myButton');
  var heading = document.getElementById('navbarSupportedContent');

  // Variable para mantener el estado del botón
  var cond = false;

  // Agregar o quitar la clase al hacer clic en el botón
  button.addEventListener('click', function() {
    if (cond) {
      heading.classList.remove('show');
      cond = false;
    } else {
      heading.classList.add('show');
      cond = true;
    }
  });
</script>

<div style=" background-color: #00B0F6; width:100%; height:40px; font-size:25px; color:#ffffff !important" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom fixed-top ">Unidad Familia Medellin</div>

  
<div class="container" style='padding-top:110px'>
        <img src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/head.png" width="100%" height="100"  class='pb-2'>
    <div class="row">    
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="https://unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/mejoramiento.jpg" style='height:400px !important' class="d-block w-100 imagen " alt="..." style=' border-radius:5%'>
        </div>
    <div class="carousel-item">
    <img src="https://unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/mejoramiento.jpg" style='height:400px !important' class="d-block w-100 imagen " alt="..." style=' border-radius:5%'>
    </div>
    <div class="carousel-item">
    <img src="https://unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/mejoramiento.jpg" style='height:400px !important' class="d-block w-100 imagen " alt="..." style=' border-radius:5%'>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</div>
</div>

   
<div class="container pt-4 text-center pb-4" >
  <h3 class='pb-4' style="color:#00B0F6"> ¿Quienes somos?</h3>
  <div class="row" > 
    <div class='col'>
      <div class="container pt-4" >
      <p >
        Somos una Unidad que pertenece a la <b style="color:#00B0F6">Secretaría de Inclusión Social, Familia y Derechos Humanos de la Alcaldía de Medellín</b>. Buscamos mejorar la calidad de vida de las familias de Medellín y fortalecerlas como grupo fundamental de formación de seres humanos. Además impulsamos la corresponsabilidad y la participación activa de la familia en la gestión de su propio desarrollo. Nuestro trabajo está direccionado por la Política Pública para la Familia de Medellín aprobada por el acuerdo 054 de 2011 del Concejo de Medellín.
      </p>
      </div>
    </div>
    <div class='col'>
    <div id="carouselExampleControls1" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/09/unidad-familia-4.jpg" style='height:400px !important' class="d-block  imagen img2 " alt="..." style=' border-radius:5%'>
        </div>
    <div class="carousel-item">
    <img src="https://unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/mejoramiento.jpg" style='height:400px !important' class="d-block  imagen " alt="..." style=' border-radius:5%'>
    </div>
    <div class="carousel-item">
    <img src="https://unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/mejoramiento.jpg" style='height:400px !important' class="d-block  imagen " alt="..." style=' border-radius:5%'>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
       <!-- <img width="80%"src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/09/unidad-familia-4.jpg" alt=""> -->
    </div>
    <div class="row">
    </div>
  </div>
</div>
</div>

<!----- FOOTER ------>



  <!-- Aquí va el resto del contenido de tu página -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>