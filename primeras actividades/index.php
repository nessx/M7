<HTML>
<HEAD>
<TITLE>PRIMERA WEB</TITLE>
</HEAD>
<BODY>
  <p>hola 
    <strong> 
      <?php
        $nombre = $_GET["variable"];
        if ($nombre != null) { 
          echo $nombre; 
        }else { 
          echo "mundo";
        }
      ?> 
    </strong>
  </p>
</BODY>
</HTML>