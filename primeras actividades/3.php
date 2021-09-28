<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
</head>
<body>
    <table>
    <?php
        $param1 = (int)$_GET['p1'];
        $param2 = (int)$_GET['p2'];
        if ((abs(100-$param1) - abs(100-$param2))<0) {
            echo ($param1 . " Esta mas cerca del 100");
        } else {
            echo ($param2 . " Esta mas cerca del 100");
        }
    ?>
    </table> 
    
</body>
</html>