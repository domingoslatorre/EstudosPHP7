<?php

function h1($conteudo) {
    echo "<h1>$conteudo</h1>";
}

function h2($conteudo) {
    echo "<h2>$conteudo</h2>";
}

function h3($conteudo) {
    echo "<h3>$conteudo</h3>";
}

function p($conteudo) {
    echo "<p>$conteudo</p>";
}

function elemento($conteudo, $elemento) {
    echo "<$elemento>$conteudo</$elemento>";
}

function ul($itens){
    echo "<ul>";
    foreach ($itens as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}

h1("Texto de um Título 1");
h2("Texto de um Título 2");
h2("Texto de Título 3");
p("Texto de um Parágrafo");
elemento("Texto de um Parágrafo", "p");
ul(array('Banana', 'Uva', 'Morango'));
ul(['João', 'Maria', 'José']);