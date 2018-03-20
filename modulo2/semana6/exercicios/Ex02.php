<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 6/ Exercício 2
* --------------------------------------------------------------------------
* Refatore a classe demonstracoes/src/Associacao/Reflexiva/ComponenteCurricular
* de forma que possa ser definido mais de um pré-requisito para cada 
* componente curricular.
--------------------------------------------------------------------------
*/

//Exemplos de Testes
$mat1 = new ComponenteCurricular('Matematica 1', '...');
$est1 = new ComponenteCurricular('Estatistica 1', '...');
$mat2 = new ComponenteCurricular('Matematica 2', '...', $mat1, $est1);

$mat3 = new ComponenteCurricular('Matematica 3', '...', $mat2);
$mat3->addPreRequisito($est1);