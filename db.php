  <?php

  session_start();

  $conn = mysqli_connect(
    'databases.000webhost.com', //localhost
    'id16478861_isi', //usuario o root
    '$_V^pX%3vh[*5+QY', //constraseña
    'id16478861_demoh2o' //Base de datos
  );

  if(isset($conn)){
      echo 'DB Conectado exitosamente';
  }

  ?>
