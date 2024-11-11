<?php
$String = "Macarrones";
$Palabra = strtoupper($String);

function evaluar($Palabra) {
    // Convertir la cadena a un array de caracteres
    $frecuencias = [];  // Array para almacenar las frecuencias
    
    // Recorremos cada carácter en la cadena
    for ($i = 0; $i < strlen($Palabra); $i++) {
        $caracter = $Palabra[$i];  // Obtener el carácter en la posición $i
        
        // Si el carácter ya está en el array de frecuencias, incrementamos su valor
        if (isset($frecuencias[$caracter])) {
            $frecuencias[$caracter]++;
        } else {
            // Si el carácter no está en el array, lo agregamos con valor 1
            $frecuencias[$caracter] = 1;
        }
    }
    
    return $frecuencias;
}

// Llamamos a la función y mostramos el resultado
$frecuencia = evaluar($Palabra);
print_r($frecuencia);
?>