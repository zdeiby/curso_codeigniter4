
<?php $tof='tru'; ?>  <!-- true or false -->

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
.delete{
  color:white;
}
.changeColor{
  color:red;
  display: flex;
  flex-direction: column-reverse;
  flex-wrap: wrap;
  align-content: center;
  cursor: pointer;
}
.borrar:hover{
  background:#f56464 !important;
  border:2px solid #f56464 !important;
}
.btn-editar:hover{
  background:#00B0F6 !important;
  border:2px solid #00B0F6 !important;
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
            <button id="myButton" class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
          </button>
       

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav tamano">
                <li class="nav-item dropdown inicio" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                       <b class="delete ">x</b>
                <label class="nav-link dropdown"   id="navbarDropdown"  role="button" data-bs="dropdown" aria-expanded="false" contenteditable="<?php echo $tof ?>">
                          <label id="m1" >  Inicio</label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/editar-inicio"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modificar inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                          </ul>
                    </li>
                    <li class="nav-item dropdown " onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <b class="delete ">x</b> <label class="nav-link dropdown "   id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false" contenteditable="<?php echo $tof ?>">
                    <label id="m2"> ¿Quienes somos?</label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/contactenos"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactenos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/ufm"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad Familia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                         <b class="delete text-center">x</b> <label class="nav-link dropdown "   id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false"contenteditable="<?php echo $tof ?>">
                         <label id="m3">  Noticias</label>
              </label>
                        <ul class="dropdown-menu submenu div1" aria-labelledby="navbarDropdown">
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/noticias"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noticias&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/agg-noticia"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Noticia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown " onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <b class="delete ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x</b> <label class="nav-link dropdown "   id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false"contenteditable="<?php echo $tof ?>">
                    <label id="m4">  Multimedia</label>
              </label>
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/galeria"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT" href="../../../ufm/index.php/galeria-videos"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                       <!--     <li><a class="dropdown-item liT" href="../../../ufm/index.php/agg-fotos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b  class="delete " >x</b></a></li> -->
                            <li><b  class="delete b" >x</b><a  class="dropdown-item liT a" href="../../../ufm/index.php/videos-agg"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                          </ul>
                    </li>
        
                    <li class="nav-item dropdown showadd" onmouseover="showSubMenu(this)" onmouseleave="hideSubMenu(this)">
                    <b class="delete ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x</b> <label class="nav-link dropdown "   id="navbarDropdown" role="button" data-bs="dropdown" aria-expanded="false"contenteditable="<?php echo $tof ?>">
                    <label id="m5"></label>
              </label>
                 
                        <ul class="dropdown-menu submenu text-center div1" aria-labelledby="navbarDropdown">
                            <li><b  class="delete b" >x</b><a class="dropdown-item liT li1" href="../../../ufm/index.php/galeria"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                         <!--   <li><b  class="delete b" >x</b><a class="dropdown-item liT li2" href="../../../ufm/index.php/galeria-videos"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li> -->
                       <!--     <li><a class="dropdown-item liT" href="../../../ufm/index.php/agg-fotos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Fotos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b  class="delete " >x</b></a></li> -->
                            <li><b  class="delete b" >x</b><a  class="dropdown-item liT a lit3" href="../../../ufm/index.php/videos-agg"contenteditable="<?php echo $tof ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;editar apartado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
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
<div><label style="font-size:15px; background:#008CC3; border:2px solid #008CC3; border-radius:5px" class='borrar'>Eliminar</label><a  style='decoration:none; color: white !important; padding-left:4px'><label style="font-size:15px; background:#008CC3; border:2px solid #008CC3; border-radius:5px" class='btn-editar'>Editar Menu</label></a></div>

</div>


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>
    function showSubMenu(elem) {
        elem.querySelector('.submenu').classList.add('show');
    }
    function hideSubMenu(elem) {
        elem.querySelector('.submenu').classList.remove('show');
    }
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
 let m5= $('#m5').text();
 console.log(m5, "nada")
   if(m5 ==''){
    $('.showadd').hide();
   }

    $('.delete').hide();  //borrar oculto
    $('.add').hide();
    
    $('.borrar').click(function(){
      $('.delete').addClass('changeColor');
     $('.delete').show(); 
     $('.add').hide();
     $(document).ready(function () {
      let confirmar=confirm("¿Estas seguro que quieres eliminar items?");
      if(confirmar){ 
        $('.tamano li b').click(function () {
             $(this).next('label').hide();
              $(this).hide();
              console.log($(this));
            })
  

        $('.tamano .b ').click(function () {
          if(confirmar){
              $(this).next('a').hide();
              $(this).hide();
          }
        });
      }
    });
    })

   let datos=false;
    
    $('.btn-editar').click(function(){
      var nombre = '<?php echo $tof; ?>';
      $('.delete').hide();
        datos=!datos;
        
        let enviar=datos.toString();
        console.log(enviar);
        if(enviar === 'true'){
                $('.navbar-nav').attr('contenteditable',enviar);
                 $('.collapse').append(`
                 <form class="inputs" method="">  
                 <label >&nbsp;</label>
            
                 <div class="row">
                 <div class="col"> 
                  <input type="text" id="menu" placeholder="Ingresa un nuevo menu"><br>
                 </div>
                 <div class="col">   
                 <button type="submit" class="btn btn-primary custom-button bton">Guardar</button> 
                 </div>     
                 </div>      
                 </form>`);
          }

          $('.bton').click(function(e){
            let menu = $('#menu').val();
            let m1= $('#m1').text();
            let m2= $('#m2').text();
            let m3= $('#m3').text();
            let m4= $('#m4').text();
           
            console.log(m1,m2,m3,m4,menu);
            e.preventDefault();
              $.ajax({
                  url: "mi-controlador/aprobar",
                  method: "POST",
                  data: { 
                    menu:menu,
                 
                 
                   },
                  success: function(response) {
                  console.log(response)
                  },
                  error: function(xhr, status, error) {
                      // Manejar errores en la petición AJAX
                    //  console.log(xhr.responseText);
                  }
              });
              $('.bton').hide();
             let m5= $('#m5').text(menu);
              $('.li1').text(menu);
              $('.showadd').show();
              $('.inputs').hide();
              $('.navbar-nav').attr('contenteditable',!enviar);
          })

          if(enviar ==='false'){
            $('.bton').hide();
          }



    })
    

 

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
 <!--   

<!DOCTYPE html>
<html>
<head>
    <title>Síntesis de voz en JavaScript</title>
</head>
<body>
    <div>
        <textarea id="text-input" placeholder="Escribe el texto que deseas convertir en voz"></textarea>
        <button id="speak-btn">Reproducir</button>
    </div>

    <script>
        // Obtener referencia a los elementos HTML
        var textInput = document.getElementById('text-input');
        var speakBtn = document.getElementById('speak-btn');

        // Agregar evento de clic al botón de reproducir
        speakBtn.addEventListener('click', function () {
            // Verificar la compatibilidad del navegador con la síntesis de voz
            if ('speechSynthesis' in window) {
                // Obtener las voces disponibles
                var voices = speechSynthesis.getVoices();

                // Crear un objeto SpeechSynthesisUtterance para convertir texto en voz
                var utterance = new SpeechSynthesisUtterance();

                // Establecer el texto a convertir en voz
                utterance.text = textInput.value;

                // Establecer la voz que se utilizará (opcional)
                utterance.voice = voices[0]; // Puedes ajustar el índice según las voces disponibles en tu navegador

                // Reproducir el texto en voz
                speechSynthesis.speak(utterance);
            }
        });
    </script>
</body>
</html>

      -->