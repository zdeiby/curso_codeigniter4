<?php
//echo form_open('/guardar');
//echo form_label('Nombre', 'name');
//echo form_input(array('name' => 'name', 'placeholder' => 'Nombre'));
//echo "<br>";
//echo form_label('Email', 'email');
//echo form_input(array('name' => 'email', 'placeholder' => 'Email'));
//echo "<br>";
//echo form_submit('guarda', 'Guardar');
//echo form_close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./guardar" method="post">
        <label for="">name</label>
        <input type="text" name="name" id="">
        <label for="">email</label>
        <input type="text" name="email" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>