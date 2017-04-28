<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    td{
      text-align: center;
    }

</style>
<body>


<form method="post">


    <input type="number" min="0" name="num" id="">
<input type="submit" name="o" id="" value="enviar">
<input type="hidden" value= id="">
</form>
<?php


if (isset($_POST['o'])){

    if (isset($_POST['num'])){
        $num =$_POST['num'];
echo "<form action='pro.php' method='post'>";

        echo "<input type='hidden' name='num' value='".$num."' id='hsd'>";
        echo "<table style='margin-right: auto; margin-left: auto; left: 0px; right: 0px'>";
        for ($i=1;$i<=$num;$i++){


            echo "<tr><td style='background-color: deepskyblue; padding: 10px; '>PRODUCTO ".$i."</td></tr>";
            echo "<tr><td>NOMBRE DEL PRODUCTO ".$i."</td></tr>";
            echo "<tr><td><input type='text' name='n".$i."' id='' required></td></tr>";

            echo "<tr><td>PRECIO DEL PRECIO ".$i."</td></tr>";
            echo "<tr><td><input type='number' min='0' step='any' name='p".$i."' id='' required></td></tr>";

            echo "<tr><td>CANTIDAD DE PRODUCTOS </td></tr>";
            echo "<tr><td><input type='number' min='0' step='any' name='c".$i."' id='' required></td></tr>";

            echo "<tr><td>DESCRIPCION DEL PRODUCTO </td></tr>";
            echo "<tr><td><input type='text'  name='d".$i."' id='' required></td></tr>";

        }
        echo "<tr><td><input type='submit' value='enviar' name='c".$i."' id=''></td></tr>";
        echo "<table>";
   echo "</form>";
    }




}


?>
</body>
    
 hola mundo
</html>
