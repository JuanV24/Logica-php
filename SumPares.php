<?php
//Inicializando array 
$Array = [2,3,4,5,6,7,8];

//Contando el numero de indices del array 
$n = count($Array);

//Variable para alamcenar la sumatoria 
$sumPar = 0;

//creando bucle para recorrer el array 
for($i = 0 ; $i < $n; $i++){
    
    //Condicion la cual validara si al recorrer el Array el numero es Par
    if($Array[$i] % 2 == 0){
        
        //Asignado el numero Par a la varible que servira como sumatoria
    $sumPar += $Array[$i];    
        
    }
    
}

print("La sumatoria de los numeros pares es de: ".$sumPar);
?>