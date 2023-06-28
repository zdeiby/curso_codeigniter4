<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .NoEditables{
            background:#00B0F6 ;
            color:white;
        }
    </style>
</head>
<body>
<div class="container pb-4 text-center" style="padding-top:130px">
<form method="">
    <div>
         <label for="" class="pb-4 pt-4">Barra de Navegación</label>
         <p>A los Recuadros con color <b style='color:#00B0F6'>azul</b> se les puede Cambiar el nombre pero seguiran perteneciendo a su debida sección, puede cambiarlos 
        por un nombre similar o borrar los menú que no quiera que esten visibles en el botón eliminar
        </p>
        <p>Los recuadros con color blanco puede agregar Menu y editarlos y agregar la informacion que desee y apareceran en el menu
        </p>
        <div class="col">
            <label for="">Menu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       
            <input required value="" class="" type="text" name="titulo" id="titulo" placeholder="Agrega Menú">
            <input required value="Inicio" class="NoEditables" type="text" name="titulo" id="titulo"  >
            <input required value="¿Quienes somos?" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Noticias" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Multimedia" class="NoEditables" type="text" name="titulo" id="titulo">
        </div>
        <div class="col">
                <label for="">SubMenu1</label>
            <input required value="" class="" type="text" name="titulo" id="titulo" placeholder="Agrega Submenú">
            <input required value="Inicio" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Contactenos" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Noticias" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Fotos" class="NoEditables" type="text" name="titulo" id="titulo">
        </div>
        <div class="col"> 
                 <label for="">SubMenu2</label>
            <input required value="" class="" type="text" name="titulo" id="titulo" placeholder="Agrega Submenú">
            <input required value="Modificar Inicio" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Unidad Familia" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Agregar Noticia" class="NoEditables" type="text" name="titulo" id="titulo">
            <input required value="Videos" class="NoEditables" type="text" name="titulo" id="titulo">
        </div>
        <div class="col">
        <label for="">SubMenu3</label>
            <input required value="" class="" type="text" name="titulo" id="titulo" placeholder="Agrega Submenú">
            <input required readonly value="" class="" type="text" name="titulo" id="titulo">
            <input required readonly value="" class="" type="text" name="titulo" id="titulo">
            <input required readonly value="" class="" type="text" name="titulo" id="titulo">
            <input required value="Agregar Videos" class="NoEditables" type="text" name="titulo" id="titulo">
        </div>
    </div>
                 
       
                
        <button type="submit" class="btn btn-success btn-color mt-3">Enviar noticia</button>
</form>
</div>
</body>
</html>