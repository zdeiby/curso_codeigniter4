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

    .foto {
        border-radius: 5px;
    }
    .notice{
      
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: stretch;
        justify-content: space-between;
        align-items: center;
        border: 2px solid #00B0F6; 
        border-radius:10px;
        background:#00B0F6;
        color:white;
    }
    .notice:hover{
        border: 2px solid #008CC3; 
        background:#008CC3;
    }
 
   

   
</style>
</head>
<body>

<div class="container pb-3 text-center" style='padding-top:129px'>
<h5 class="pt-2 pb-4">Todas nuestras noticias</h5>
<?php foreach($noticias as $noticia) { ?>
    <div class="row divNoticia pb-2" >
        <div class='col notice'>
            <img width="20%" src="<?php echo $noticia['url'] ?>" class="foto" alt="" />
            <p><b><?php echo $noticia['titulo'] ?></b></p>
                        <p> <b>Fecha: </b><?php echo $noticia['created_at'] ?></p>
        </div>
    </div>

   <?php } ?> 
</div>



</body>
</html>