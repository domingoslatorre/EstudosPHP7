<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 9
* --------------------------------------------------------------------------
* Crie uma funcao genérica que imprime os elemento HTML p, a, ul e ol.
* Essa função deverá receber a tag, conteúdo e array de atributos. 
* Exemplos:
*
* elemento('p','Olá mundo');
* saída <p>Olá mundo</p>
*
* elemento('a','Nossos Serviços', array('href'=>'servicos.php'));
* saída <a href='servicos.php'>Nossos Serviços</a>
*
* elemento('p','Olá mundo', ['id'=>'p1', 'class'=>'medio']);
* saída <p id='p1' class='medio'>Olá mundo</p>
*
*elemento('ul', ['Banana', 'Laranja', 'Limão'], ['id'=>'lista-principal'])
*saída
* <ul id='lista-principal'>
*   <li>Banana</li>
*   <li>Laranja</li>
*   <li>Limão</li>
* </ul>
* --------------------------------------------------------------------------
*/
