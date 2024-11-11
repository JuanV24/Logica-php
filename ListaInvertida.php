<?php
// Inicializando mi array 
$arraynum = [1,2,4,5,7];

//Creando el metodo de ordenamiento para devolver un arrray en forma invertida 
//bucle for para el numero de vueltas
for ($i = 0; $i < count($arraynum) - 1; $i++) {
    
    // Bucle anidado para realizar las comparaciones en cada iteración
    for ($j = 0; $j < count($arraynum) - $i - 1; $j++) {
        
        // Si el elemento actual es menor que el siguiente, se intercambian
        if ($arraynum[$j] < $arraynum[$j + 1]) {
            
            // Intercambio de elementos
            $temp = $arraynum[$j];
            $arraynum[$j] = $arraynum[$j + 1];
            $arraynum[$j + 1] = $temp;
        }
    }
} 
  print("Array desordenado: \n");
    print_r($arraynum);

?>