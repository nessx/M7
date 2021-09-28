<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <!-- Formulario para que el usuario inserte un numero -->
    <form action="" method="post">
        Numero: <input type="text" name="num"><br>
        <input type="submit" value="Enviar">
    </form>

    <table>
        <?php
            //en la variable numero se almacena el valor de la variable num enviada desde el formulario
            $numero = $_POST["num"];

            //control de errores para comprobar si el numero es par o impar
            if ($numero%2==0){
                echo "el numero $numero no es impar";
                echo "<br>";
                echo "<img src='error.jpg' width='300' height='300' />";
            }else{
                //columnas
                for ($i = 0; $i <= $numero-2; $i++) {
                    echo "<tr>";
                    //filas
                    for ($x = 0; $x <= $numero; $x++) {
                        echo '<td bgcolor="orange">'.$i.".".$x."</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table> 
    
</body>
</html>