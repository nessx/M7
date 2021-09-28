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
    <table>
        <?php
            $param1 = $_GET["p1"];
            $param2 = $_GET["p2"];
            if ($param1 == null && $param2 == null) { 
                $param1 = 7;
                $param2 = 10;
            }
            for ($i = 1; $i < $param1+1; $i++) {
                echo "<tr>";
                for ($x = 1; $x < $param2+1; $x++) {
                    echo "<td>$i".".". "$x</td>";
                }
                echo "</tr>";
            }
        ?>
    </table> 
    
</body>
</html>