
<?php 

// Autor: Alex

// Creamos la funcionURL para acceder a la URL de Yahoo Finance y retornar los valores del sitio web por return 
// se pasa como parametro la variable
function funcionURL($link_yahooFinance) {

    //accedemos al Link con la dirección de yahoo Finance
    $acceso_Link = curl_init($link_yahooFinance);

    //extrae todos los datos del link como cadena de caracteres
    curl_setopt($acceso_Link, CURLOPT_RETURNTRANSFER, TRUE);

    //guarda la información mostrara por el link en la variable cargarDatos
    $cargarDatos = curl_exec($acceso_Link); 
    
    //Cerrando conexión
    curl_close($acceso_Link); 

    //retornando valores por return
    return $cargarDatos; 
}

    //ejecuta la funcionURL y se asignan los resultados de la funcion a la variable resultados_Link y se los muestra por pantalla con la funcion echo
    $resultados_Link = funcionURL("https://finance.yahoo.com/cryptocurrencies"); 

    //funcion para mostrar un resultado por pantalla
    echo $resultados_Link;
?>
