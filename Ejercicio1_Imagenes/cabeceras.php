<?php
   $headers = apache_request_headers();
   echo "<h1>Script Cabeceras - Tarea de Ana Cachafeiro</h1>";
   foreach ($headers as $header => $value) {
      echo "$header: $value <br />\n";
   }
?>
