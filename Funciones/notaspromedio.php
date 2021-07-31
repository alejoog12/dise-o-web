<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Desarrollo de funciones</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="nombre">Ingrese el nombre del alumno:</label>
        <input type="text" name="nombre"><br>
    <?php
        for ($i=1; $i < 5; $i++) { 
            # code...
        
    ?>
        <label for="nota<?php echo $i?>">Ingrese la nota <?php echo $i?>:</label>
        <input type="text" name="nota<?php echo $i?>"><br>
    <?php
        }
    ?>
        <input type="submit"><br>
    </form>
    <?php include('funciones.php');
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $nombre = $_POST['nombre'];

            $notas = array();
            for ($i=1; $i < 5; $i++) { 
                
                array_push($notas, $_POST['nota'.$i]);
            }
            echo "<h3><strong>Recuento de notas:</strong></h3>";
            foreach($notas as $nota){
                echo $nota;
                echo "<br>";
            }
            echo "<br>";
            $promedio = promedio($notas);
            echo "El Promedio del estudiante ".$nombre." es de: ".$promedio;
        }
    ?>

</body>
</html>