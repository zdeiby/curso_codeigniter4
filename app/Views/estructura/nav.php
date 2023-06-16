<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
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
}
.sub{
    background: #ffffff;
    opacity: 1;
    text-decoration: none;
    color: inherit;
}
.liT:hover{
    background: #e5e5e5;
}
li {
        list-style: none; /* Elimina el estilo de lista */
        
    }
a{
    text-decoration: none;
    color: black  !important;
}
.div1{
    background: #ffffff;
    opacity: 1;
    border: 2px solid #e5e5e5;
    border-radius: 8%;
}
.login:hover{
    background: #00B0F6 !important;
    
}

.footer{
    background:#00B0F6;
}



</style>
    <title>Document</title>
</head>
<body>
<div style=" background-color: #00B0F6; width:100%; height:40px; font-size:25px; color:#ffffff" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom fixed-top ">Unidad Familia Medellin</div>
        
        <div style="background-color: #ffffff; opacity: 1;  margin-top:39px !important; font-size:18px;" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom fixed-top ">
            <div class="col-md-3 mb-2 mb-md-0">
                <img style="padding-left: 30px;" width="150" height="100" role="img" src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/03/Open-Graph-.png" alt="">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none"></a>
            </div>
    
            <nav class="nav col-md-4 mb-2 justify-content-center mb-md-0">
                <ul class="nav">
                    <li>
                        <div class="menu-item" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                            <a href="./" class="nav-link px-2 ">Inicio</a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-item" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                            <a href="#" class="nav-link px-2">¿Quienes somos?</a>
                            <div class="submenu text-center div1">
                                <label class="liT mb-2 "><a class=" sub liT" href="<?php echo ($url == "contactenos" || $url == "ufm" )?  'contactenos':'ufm' ?> ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactenos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></label><br>
                                <label class="liT"><a class="sub liT" href="<?php echo ($url == "contactenos" || $url == "ufm" )?  'ufm':'contactenos' ?> ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad Familia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="menu-item" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                            <a href="#" class="nav-link px-2">Noticias</a>
                            <div class="submenu text-center div1">
                                <label class="liT mb-2 "><a class=" sub liT" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactenos&nbsp;&nbsp;&nbsp;&nbsp; </a></label><br>
                                <label class="liT"><a class="sub liT" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIOF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="menu-item" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                            <a href="#" class="nav-link px-2">Multimedia</a>
                        </div>
                    </li>
                </ul>
            </nav>
    
            <div class="col-md-3 text-end">
                <button type="button" style="border:1px solid #00B0F6 !important; color:#00B0F6 !important" class="btn me-2 login">Login UFM</button>
                <button type="button" style="border:1px solid #00B0F6 !important;background:#00B0F6 !important" class="btn btn-primary">Login Admin</button>
            </div>
        </div>
  
        <script>
    function showSubMenu(element) {
        var submenu = element.querySelector('.submenu');
        if (submenu) {
            submenu.classList.add("show");
        }
    }

    function hideSubMenu(element) {
        var submenu = element.querySelector('.submenu');
        if (submenu) {
            submenu.classList.remove("show");
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
</body>
</html>