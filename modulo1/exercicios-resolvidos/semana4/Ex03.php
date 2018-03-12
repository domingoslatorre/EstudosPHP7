<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 4 / Exercício 3
* --------------------------------------------------------------------------
* Consulte a documentação do PHP (http://php.net/manual/pt_BR/) e crie uma
* função que codifica uma senha utilizando a função md5. Essa função deverá
* receber a string a ser criptografada e uma string adicional (salt, ver 
* https://pt.wikipedia.org/wiki/Sal_(criptografia)). A string adicional
* deverá ser concatenada a string original antes de passar pela função
* md5.
* --------------------------------------------------------------------------
*/
//Força checagem de tipo de parâmetros da função
declare(strict_types=1);

function my_md5(string $string, string $salt) : string {
    $string .= $salt;
    return md5($string);
}

$senha = '123456';
$salt = 'oL19xp1~1';
echo "Original: $senha <br>";
echo "MD5: " . md5($senha) . "<br>";
echo "MD5 com Salt: " . my_md5($senha, $salt);