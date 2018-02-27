<?php

function h1($conteudo, $id = '', $class = '') {
	echo "<h1 id='$id' class='$class'>$conteudo</h1>";
}

h1('Olá mundo');