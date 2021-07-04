<?php
$datos = [
    "nombre : " => "Lisandro",
    "apellido : " => "Reinozo",
    "edad : " => "34",
    "hobbie : " => "Pc, Programar",
    "editor de codigo preferido : " => "visual Studio code, eclipse, netbeans",
    "sistema operativo utilizado : " => "windows_10"
];

foreach($datos as $informacion => $usuario){
    echo $informacion . $usuario. "<br>";
}

?>