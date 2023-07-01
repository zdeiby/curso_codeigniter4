<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex{
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
            align-items: baseline;
            /* align-content: center; */
            flex-wrap: nowrap;
            
        }
        .form-check-input {
       
        width: 1.2em !important;
        height: 1.2em !important;
       
}
    </style>
</head>
<body>
<div class="container pb-4 text-center" style="padding-top:130px">
<label class="pt-3">  Si quieres añadir algun item que haya sido borrado anteriormente señala en la casilla correspondiente y da click en Enviar
    para que vuelva a aparecer en el menú
<form>
<div class="col">
    <ul class="navbar-nav ">
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
               
                    <div class="flex">

                       <b class="" style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>
                       <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                             Inicio
                       </label>
                    </div>
                   
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown"> 
                       
                            <li> <div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>inicio  </div>  </li>
                           <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Modificar  </div>  </li>
                     
                    </ul>
                    
                </li>
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
                <div class="flex">
                    <b class="delete " style=""><input type="checkbox" class="form-check-input" name="" id="radio"></b> 
                        <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                           ¿Quienes somos?
                        </label>
                        </div>
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown">
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Contactenos</div></li>
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Unidad Familia</div></li>
                        </ul>
                </li>
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
                       <div class="flex">
                         <b class="delete " style=""><input type="checkbox" class="form-check-input" name="" id="radio"></b> <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                           Noticias
                         </label>
                       </div>
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown">
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Noticias</div></li>
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b> Noticia </div></li>
                        </ul>
                </li>
                  
                <li class="nav-item dropdown " onmouseover="showSubMenu(this)" >
                       <div class="flex">
                         <b class="delete " style=""><input type="checkbox" class="form-check-input" name="" id="radio"></b> <label class="nav-link dropdown " id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" >
                            Multimedia
                        </label>
                       </div>
                        <ul class="dropdown-menu submenu text-center " aria-labelledby="navbarDropdown">
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Fotos</div></li>
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Videos</div></li>
                       <!--     <li><a class="dropdown-item liT" otos"> Fotos <b  class="delete " >x</b></li> -->
                            <li><div class="flex"><b class=" " style=""> <input type="checkbox" class="form-check-input" name="" id="radio"></b>Videos</div></li>
                          </ul>
                </li>
        </ul>
    </div>
    <button class="btn btn-primary custom-button">Enviar</button>
        </form>
</div>



<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>
    $('.').click(function(){

    })
</script>

</body>
</html>

