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
    border-radius:2% !important;
}
.nav-link:hover{
  border-bottom:1px solid #00B0F6 !important;
}
  </style>
    <title>Document</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-light fixed-top nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../ufm/index.php">
                <img src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/03/Open-Graph-.png" alt="" width="150" height="100">
            </a>
            
  <span class="navbarr-icon"></span>
</button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav tamano">
                <li class="nav-item dropdown inicio" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                        <a class="nav-link dropdown "   id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false">
                            Inicio <b style="color:red" class="delete">x</b>
                        </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/editar-inicio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modificar inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                          </ul>
                    </li>
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                        <a class="nav-link dropdown"  id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false">
                            ¿Quienes somos? <b style="color:red" class="delete">x</b>
                        </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/contactenos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactenos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/ufm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad Familia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                        <a class="nav-link dropdown"  id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false">
                            Noticias <b style="color:red" class="delete">x</b>
                        </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/noticias">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noticias&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/agg-noticia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Noticia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                        <a class="nav-link dropdown" hre id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false">
                            Multimedia <b style="color:red" class="delete">x</b>
                        </a>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/galeria">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/galeria-videos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                       <!--     <li><a class="dropdown-item liT" href="../../../ufm/index.php/agg-fotos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li> -->
                            <li><a class="dropdown-item liT" href="../../../ufm/index.php/videos-agg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                          </ul>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="">
                    <a href="../../../ufm/index.php/login"><button type="button" class="btn btn-primary custom-button">Login UFM</button></a>
                </div>
            </div>
        </div>
    </nav>
</div>


<br>
<div style=" background-color: #00B0F6; width:100%; height:40px; font-size:25px; color:#ffffff !important" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom fixed-top ">
<div>Unidad Familia Medellin </div>
<div><label style="font-size:15px" class='editar'>Editar&nbsp;&nbsp;&nbsp;</label></div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>
    function showSubMenu(elem) {
        elem.querySelector('.submenu').classList.add('show');
    }
    function hideSubMenu(elem) {
        elem.querySelector('.submenu').classList.remove('show');
    }
    $('.delete').hide();  //borrar oculto
    
    $('.editar').click(function(){
     // $(this).addClass('hidden');
     $('.delete').show();

     $(document).ready(function () {
        $('.tamano li').click(function () {
            $(this).hide();
            console.log("diste click");
        });
    });
    })
    

    

 

</script>


  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
</body>
</html>