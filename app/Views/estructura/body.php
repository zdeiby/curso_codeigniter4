<?php 
    $array=array('dato'=>'valor','dato2'=>'valor2');
  //  $array2={["dato"->"hola"]};
    print_r($array['dato']);

?>
<body>
    <h2> hola desde el body </h2>
    <?php echo suma(1,2) ?>
   
    <?php foreach ($nombre as $key) { 
      echo '<label>'.$key->name.'</label></br>';
    }; ?>
</body>
</html>