<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .scrollable-container {
      max-height: 500px;
      overflow-y: auto;
    }

    .imagen {
      border-radius: 5px;
      width:150px;
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
    .fondo{
      background:#00B0F6 !important;
    }
   
    .activo{
      border:2px #008CC3 !important;
      background:#008CC3 !important;
    }
  </style>
</head>
<body>
    
<div class="container pt-4" style='padding-top:120px !important'>
  <div class="row">
    <?php if (true): ?>
      <div class="col-sm-2">
        <p>Avance</p>
        <ul class="list-group">
          <li value="0"  class='list-group-item fondo text-light activo' > 10%</b></li>
          <li value="10" class='list-group-item fondo text-light ' > 20%</b></li>
          <li value="20" class='list-group-item fondo text-light ' > 30%</b></li>
          <li value="30" class='list-group-item fondo text-light activo' > 40%</b></li>
          <li value="40" class='list-group-item fondo text-light ' > 50%</b></li>
          <li value="50" class='list-group-item fondo text-light ' > 60%</b></li>
          <li value="60" class='list-group-item fondo text-light '> 70%</b></li>
          <li value="70" class='list-group-item fondo text-light ' > 80%</b></li>
          <li value="80" class='list-group-item fondo text-light  mb-4'> 90%</b></li>
          <div class="contenedor" ><div class="ocultar">-</div></div>
        </ul>
      </div>
    <?php else: ?>
      <div class="col-sm-1"><div class="contenedor" onclick="setShow(true)"><div class="ocultar">+</div></div></div>
    <?php endif; ?>
    
    <div class="col">
    <?php
        $videoId = "-1xwHxEiPf4"; // Reemplaza "VIDEO_ID" por el ID del video de YouTube que deseas mostrar

        echo '<iframe width="95%" height="450px" src="https://www.youtube.com/embed/' . $videoId . '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
        ?>

      <h2 class="text-center mt-1 mb-3"><?php echo "titulo"; ?></h2>
    
    </div>
  <div class="col-sm-2 scrollable-container text-center mb-4">
<?php   foreach ($multimedia as $info) { ?>
    
      <div>
        
        <?php
          $videoId =$info["url"]; // Reemplaza "VIDEO_ID" por el ID del video de YouTube que deseas mostrar

          $thumbnailUrl = "https://img.youtube.com/vi/" . $videoId . "/maxresdefault.jpg";
          echo '<img style="width:100%" src="' . $thumbnailUrl . '" alt="Miniatura del video">';
        ?>
        <label for="" class='pb-2'> <?php echo $info["name"] ?></label><br>
      </div>
     <?php   } ?>   
    </div>
  </div>
</div>

</body>
</html>