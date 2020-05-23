<?php
require_once 'tarefa1.php';

$classeEstados = new tarefa1();

$estados = $classeEstados->registrandoEstados();

$uf = $classeEstados->getUf();


foreach ($uf as $estado){

echo $estado .'-'.$estados[$estado]."<br />";

}


?>
