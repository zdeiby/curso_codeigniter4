<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
    
</head>
<body>
<div class="container text-center" style="padding-top: 149px">
    <div class="container text-center">
        <button class="btn btn-primary" style="background:#00B0F6; border:none;" data-toggle="modal" data-target="#exampleModal">Agregar nueva sede</button>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Ingresa el barrio</label>
                    <input type="text" class="form-control" name="id" id="url">
                    <label>Ingresa la dirección</label>
                    <input type="text" class="form-control" name="id" id="url">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary cerrar" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary save" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <h5 class="text-center pt-3 pb-3 elemento-lectura">PUNTOS DE ATENCIÓN</h5>
    <table class="table text-center">
        <thead></thead>
        <tbody>
            <tr>
                <td class="elemento-lectura">Aranjuez - Carrera 50ª No. 93 - 39</td>
            </tr>
            <tr>
                <td class="elemento-lectura">castilla - Carrera 50ª No. 93 - 39</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col">
  <img class="pb-4" width='100%' src="https://www.unidadfamiliamedellin.com.co/unidadfamiliamedellin/resources/img/maps.png" alt="">
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>