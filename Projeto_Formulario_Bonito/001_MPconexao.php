<?php


    //parãmetros de conexão
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DB","bd_proj_jovem");

    //criando o objeto de conexão
    $conn = new mysqli(HOST,USER,PASSWORD,DB);

/*                                  // DUAS MANEIRAS DE COLOCAR OS PARAMETROS DE CONEXÃO
    //parãmetros de conexão
    $HOST = "localhost";
    $USER = "root";
    $PASSWORD = "";
    $DB= "bd_proj_jovem";

    //criando o objeto de conexão
    $conn = new mysqli($HOST,$USER,$PASSWORD,$DB);
*/
    if ($conn->connect_error) {
        die("Falha na conexão!");    
    //}else{echo "Conexão ok!!!!!!1";
    };


?>