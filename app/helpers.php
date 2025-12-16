<?php 
    function fechaActual()
    {   
        date_default_timezone_set('UTC');
        return "Fecha actual: " . date('d/m/y');
    }
?>