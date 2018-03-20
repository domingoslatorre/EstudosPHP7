<?php

require_once 'Funcoes.php';

//http://php.net/manual/pt_BR/class.datetime.php
//Ver: https://www.youtube.com/watch?v=w5Acj5UnQ2U

$agora = new DateTime();
my_var_dump($agora);

//Formatar saída 
//http://php.net/manual/pt_BR/function.date.php
echo $agora->format('d/m/Y');

//Criando datas de strings
$dataString = '20-01-2018';
$minhaData = DateTime::createFromFormat('d-m-Y', $dataString);
my_var_dump($minhaData);

//Criando datas de timestamp
//https://www.unixtimestamp.com/
$data2 = (new DateTime())->setTimestamp('1521547236');
my_var_dump($data2);

date_default_timezone_set('UTC');

$agora = new DateTime();
my_var_dump($agora);

