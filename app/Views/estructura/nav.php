<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    <title>Document</title>
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
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Multimedia
                        </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="/contactenos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a class="dropdown-item liT" href="/ufm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
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

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
</body>
</html>