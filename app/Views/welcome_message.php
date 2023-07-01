<!DOCTYPE html>
<html lang="en">
<head>
<script>
      window.onload = function() {
        // Verificar la compatibilidad del navegador con la síntesis de voz
        if ('speechSynthesis' in window) {
          var msg = new SpeechSynthesisUtterance();
          var voices = speechSynthesis.getVoices();

          // Establecer el texto a reproducir
          msg.text = 'Selecciona el texto que desees y con gusto lo leeré por ti';

          // Establecer la voz que se utilizará (opcional)
          msg.voice = voices[0]; // Puedes ajustar el índice según las voces disponibles en tu navegador

          // Reproducir el mensaje de voz
          speechSynthesis.speak(msg);
        }
      };
    </script>
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
    border-radius:2%  !important;
}
.upload-button {
        position: relative;
    }

    .upload-button::before {
    
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 30px;
        border: 2px solid #000;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
    }

    .upload-button input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .carousel-container {
  width: 100%;
  height: 400px;
}

.carousel-container .carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
#speak-btn{
 background: #b3e0f2 !important;
 width: 3%;
 border-radius:50%;
 z-index: 9999 !important;
 
}
#speak-btn:hover{
 background: #00B0F6 !important;
}

  </style>
</head>
<body>

<div class="container" style="padding-top: 110px;" id="text-input">
    <img src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/head.png" width="100%" height="100" class="pb-2">
    <div class="row">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="upload-button position-relative">
                            <img src="http://localhost/ufm/uploads/fileInput1.jpg" style="height: 400px !important; border-radius: 5%;" class="d-block w-100 imagen" alt="...">
                            <input type="file" id="fileInput1" >
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="upload-button position-relative">
                            <img src="http://localhost/ufm/uploads/fileInput2.jpg" style="height: 400px !important; border-radius: 5%;" class="d-block w-100 imagen" alt="...">
                            <input type="file" id="fileInput2">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="upload-button position-relative">
                            <img src="http://localhost/ufm/uploads/fileInput3.jpg" style="height: 400px !important; border-radius: 5%;" class="d-block w-100 imagen" alt="...">
                            <input type="file" id="fileInput3">
                        </div>
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
</div>

  


<div class="container pt-4 text-center pb-4">
  <h3 class="pb-4" style="color:#00B0F6" contenteditable="false">¿Quiénes somos?</h3>
  <div class="row">
    <div class="col-md-6">
      <div class="container pt-4">
        <p contenteditable="false">
          Somos una Unidad que pertenece a la <b style="color:#00B0F6" >Secretaría de Inclusión Social, Familia y Derechos Humanos de la Alcaldía de Medellín</b>. Buscamos mejorar la calidad de vida de las familias de Medellín y fortalecerlas como grupo fundamental de formación de seres humanos. Además, impulsamos la corresponsabilidad y la participación activa de la familia en la gestión de su propio desarrollo. Nuestro trabajo está direccionado por la Política Pública para la Familia de Medellín aprobada por el acuerdo 054 de 2011 del Concejo de Medellín.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div id="carouselExampleControls1" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="upload-button position-relative">
              <img src="http://localhost/ufm/uploads/fileInputC1.jpg" style="height:400px !important; border-radius:5%;" class="d-block w-100 imagen" alt="...">
              <input type="file" id="fileInputC1">
            </div>
          </div>
          <div class="carousel-item">
            <div class="upload-button position-relative">
              <img src="http://localhost/ufm/uploads/fileInputC2.jpg" style="height:400px !important; border-radius:5%;" class="d-block w-100 imagen" alt="...">
              <input type="file" id="fileInputC2">
            </div>
          </div>
          <div class="carousel-item">
            <div class="upload-button position-relative">
              <img src="http://localhost/ufm/uploads/fileInputC3.jpg" style="height:400px !important; border-radius:5%;" class="d-block w-100 imagen" alt="...">
              <input type="file" id="fileInputC3">
            </div>
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
    </div>
  </div>
</div>


       <!-- <img width="80%"src="https://cdnwordpresstest-f0ekdgevcngegudb.z01.azurefd.net/es/wp-content/uploads/2022/09/unidad-familia-4.jpg" alt=""> -->
    </div>
    <div class="row">
    </div>
  </div>
</div>
</div>




<div>
    <span id="selected-text" value="hola">holaa</span>
    <button id="speak-btn" style="padding: 0; border: none; background: none;">
    <img src="https://cdn.icon-icons.com/icons2/1132/PNG/512/1486348532-music-play-pause-control-go-arrow_80458.png" alt="" style="width: 100%; height: auto;">
    </button>

</div>
<audio id="my-audio" src="ruta-del-audio.mp3" autoplay></audio>
<!----- FOOTER ------>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
      $(document).ready(function() {
    $('#fileInput1').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput1')[0].files[0]);
          formData.append('slug','fileInput1.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInput2').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput2')[0].files[0]);
          formData.append('slug','fileInput2.jpg')

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInput3').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInput3')[0].files[0]);
          formData.append('slug','fileInput3.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInputC1').on('change', function() {  //para cargar imagenes del banner superior
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInputC1')[0].files[0]);
          formData.append('slug','fileInputC1.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInputC2').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInputC2')[0].files[0]);
          formData.append('slug','fileInputC2.jpg')

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
    $('#fileInputC3').on('change', function() {
     // e.preventDefault();

          var formData = new FormData();
          formData.append('formData', $('#fileInputC3')[0].files[0]);
          formData.append('slug','fileInputC3.jpg');

          console.log(formData); // Mueve esta línea aquí

          $.ajax({
              url: "index.php/add-img",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  console.log(response);
                 window.location.reload();
              },
              error: function(xhr, status, error) {
                  console.log(xhr.responseText);
              }
          });
    });
});

    </script>
 <!-- AUDIO AUTOMATICO -->
 

 <script>
    // Obtener referencia al botón de reproducir y al span del texto seleccionado
    $('#speak-btn').hide();
var speakBtn = document.getElementById('speak-btn');
var selectedText = document.getElementById('selected-text');

    // Hacer clic automáticamente en el botón al cargar la página

// Función para mostrar u ocultar el botón de reproducir y establecer el texto seleccionado
function toggleSpeakBtn(show, text) {
 
     speakBtn.style.display = show ? 'inline-block' : 'none';
    selectedText.innerText = text;
   
}

// Agregar evento de clic al botón de reproducir
speakBtn.addEventListener('click', function () {
    // Verificar la compatibilidad del navegador con la síntesis de voz
    if ('speechSynthesis' in window) {
        // Obtener las voces disponibles
        var voices = speechSynthesis.getVoices();

        // Crear un objeto SpeechSynthesisUtterance para convertir texto en voz
        var utterance = new SpeechSynthesisUtterance();

        // Establecer el texto a convertir en voz (obtenido del span del texto seleccionado)
        utterance.text = selectedText.innerText;

        // Establecer la voz que se utilizará (opcional)
        utterance.voice = voices[0]; // Puedes ajustar el índice según las voces disponibles en tu navegador

        // Reproducir el texto en voz
        speechSynthesis.speak(utterance);
    }
});

// Agregar evento de selección de texto
document.addEventListener('mouseup', function () {
  $('#speak-btn').show();
    // Obtener el texto seleccionado
    var selected = window.getSelection();
    var selectedText = selected.toString().trim();

    // Verificar si se seleccionó texto
    if (selectedText !== '') {
        // Obtener la posición de la selección
        var range = selected.getRangeAt(0);
        var rect = range.getBoundingClientRect();

        // Calcular la posición del botón de reproducir relativa a la selección
        var left = rect.left + rect.width + 5;
        var top = rect.top - 5;

        // Mostrar el botón de reproducir y establecer el texto seleccionado
        toggleSpeakBtn(true, selectedText);

        // Posicionar el botón de reproducir al lado de la selección
        speakBtn.style.position = 'fixed';
        speakBtn.style.left = left + 'px';
        speakBtn.style.top = top + 'px';
    } else {
        // No hay texto seleccionado, ocultar el botón de reproducir
        toggleSpeakBtn(false, '');
    }
});
$('#selected-text').hide();
</script>
  <!-- Aquí va el resto del contenido de tu página -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>