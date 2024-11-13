<center><h1>Solución a Errores en PHP 8</h1></center>

<center><h3>Manual de PHP Online</h3></center>
                

<center> <strong>¿Tienes alguna pregunta?</strong>
<p>Presentado por Karol Calvache. <abbr title="correo electrónico">EMAIL:</abbr> karfanci@outlook.com</p>
</center>

<h4>Solución a Fatal Error | Warning | Parse Error</h4>

`Xampp` : <http://localhost/errores-de-php/index.php>

Código de Referencia,

    
    /*=============================================
    FATAL ERROR
    Este tipo de errores aborta la ejecución del programa e interrumpe su completo funcionamiento. Ocurre, por ejemplo, cuando intentas ejecutar una función y no existe en tu código o intentas iniciar un objeto de una clase que aún no has declarado
    =============================================*/
    
    class ClaseUno{
    
        public function FuncionUno(){}
    
    }
    
    $variable = new ClaseDos();
    $variable -> FuncionUno();
    
    
    /*=============================================
    WARNING
    Los errores de advertencia no abortan la ejecución del programa, esto quiere decir que el programa sigue su curso pero puede no funcionar correctamente o ser la causa de que más adelante se produzcan errores más graves. 
    Ocurre por ejemplo,  cuando usamos variables que no se hayan declarado anteriormente.
    =============================================*/
    
    $variable1 = "hola soy la variable 1";
    
    echo $variable2;
    
    
    /*=============================================
    PARSE ERROR
    Los errores de tipo Análisis Gramatical, como su nombre lo indica, aparecen cuando ocurre un error de sintaxis. Y PHP lo toma como un error igual de grave como el Fatal Error ya que aborta la ejecución del programa.
    El error más común es cuando olvidamos colocar un punto y coma al final  de una línea de código, ya que el punto y coma es estricto en PHP
    =============================================*/
    
    $array = [0,1,2,3] // Aquí faltó poner el punto y coma
    
    echo "hola mundo";
    

