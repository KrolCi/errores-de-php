<?php 

/*=============================================
Mostrar errores
=============================================*/
ini_set('display_errors', 1); // coloca 0 si no deseas que aparezcan los errores también en el navegador
ini_set("log_errors", 1); // con esta línea estamos diciendo que queremos crear un nuevo archivo de errores
ini_set("error_log",  "D:/xampp/htdocs/errores/php_error_log"); // con esta línea le decimos a PHP donde queremos que se guarde ese archivo, lo recomendado es que sea al lado del archivo index.php

/*=============================================
FATAL ERROR
Este tipo de errores aborta la ejecución del programa e interrumpe su completo funcionamiento. Ocurre, por ejemplo, cuando intentas ejecutar una función y no existe en tu código o intentas iniciar un objeto de una clase que aún no has declarado
=============================================*/

class ClaseUno{

	public function FuncionUno(){}

}

$variable = new ClaseUno();
$variable -> FuncionUno();

/*=============================================
WARNING
Los errores de advertencia no abortan la ejecución del programa, esto quiere decir que el programa sigue su curso pero puede no funcionar correctamente o ser la causa de que más adelante se produzcan errores más graves. 
Ocurre por ejemplo,  cuando usamos variables que no se hayan declarado anteriormente.
=============================================*/

$variable1 = "hola soy la variable 1";

echo $variable2;

/*=============================================
PARSE
Los errores de tipo Análisis Gramatical, como su nombre lo indica, aparecen cuando ocurre un error de sintaxis. Y PHP lo toma como un error igual de grave como el Fatal Error ya que aborta la ejecución del programa.
El error más común es cuando olvidamos colocar un punto y coma al final  de una línea de código, ya que el punto y coma es estricto en PHP
=============================================*/

$array = [0,1,2,3]; // Aquí faltó poner el punto y coma

echo "hola mundo";

