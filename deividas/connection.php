<?php

// konstantos
  define('DB_VARDAS', 'projektas'); // duomenu bazes vardas
  define('MYSQL_VARTOTOJO_VARDAS', 'root'); // cia yra mysql user'is
  define('MYSQL_SLAPTAZODIS', 'root');
  define('DB_HOST', 'localhost');

// echo DB_VARDAS; // !! konstantom nereik '$' zenklo


// Prisijungimas prie //

$connection = mysqli_connect(DB_HOST, MYSQL_VARTOTOJO_VARDAS, MYSQL_SLAPTAZODIS, DB_VARDAS); // jeigu PORT ne 80, irasykite y gala
//     AR true
  if ( $connection ) {
  // echo "Prisijungete sekmingai <br />";
  } else {
      die("ERROR: nepavyko prisijungti" . mysqli_connect_error() );
  }
