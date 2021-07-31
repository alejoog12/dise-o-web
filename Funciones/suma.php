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
        <label for="num1">Ingrese el primer valor:</label>
        <input type="text" name="num1"><br>
        <label for="num2">Ingrese el segundo valor:</label>
        <input type="text" name="num2"><br>
        <input type="submit"><br>
    </form>
    <?php include('funciones.php');
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $resultado = suma($n1, $n2);
            echo '<p>El resultado de la suma:'.$n1.' + '.$n2.' = $resultado</p>';
        }
    ?>

</body>
</html>