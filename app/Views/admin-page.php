<?php $tof='true'; ?>  <!-- true or false -->

<!DOCTYPE html>
<html>
<head>
  <title>Noticias</title>
  <style>
    .scrollable-container {
      max-height: 500px;
      overflow-y: auto;
    }

    .foto {
      border-radius: 5px;
    }

    .parrafo {
      width: 90%;
    }

    .notice {
      border-bottom: 2px solid rgb(0, 176, 246) !important;
      border-top: 2px solid rgb(0, 176, 246) !important;
      width: 60%;
    }

    .divNoticia {
      display: flex;
      justify-content: center;
    }




    .hover-container {
  position: relative;
  display: inline-block;
}

.image-container {
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Cambia el color de fondo a transparente */
  opacity: 0;
  transition: opacity 0.3s;
}

.overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
}

.image-container:hover .overlay {
  opacity: 1;
}

  </style>
</head>
<body>
    
  <div class="container " style='padding-top:125px'>

  <!--<img src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/head.png" width="100%" height="100"  class='pb-2'> -->
    <div class="row hover-container">
        <div class="col image-container">
            <img class="" width="100%" height="350px" src="http://localhost/ufm/uploads/imagen1.jpg" alt="Imagen"/>
            <div class="overlay">
                <p class="overlay-text">Click para cambiar imagen</p>
            </div>
        </div>
    </div>
    <div class="row text-center pt-4 pb-4">
        <label for="" contenteditable='<?php echo $tof; ?>'>Agrega un titulo</label>
    </div>
    <div class="row text-center pb-4">
        <label for="" contenteditable='<?php echo $tof; ?>'>Agrega un texto</label>
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(".select").click(function(){
        let noticia=$(this).data('datos');
        console.log(noticia)
        window.location.href = `./noticias/${noticia.slug}` ;

    })
</script>

</body>
</html>
