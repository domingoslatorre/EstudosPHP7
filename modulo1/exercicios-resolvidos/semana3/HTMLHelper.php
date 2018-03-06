<?php


function titulo($tag, $conteudo, $id, $class) {
    echo "<$tag id='$id' class='$class'>";
    echo $conteudo;
    echo "</$tag>";
}

function a($url, $conteudo, $target, $id, $class) {
    echo "<a id='$id' class='$class' href='$url' target='$target'>";
    echo $conteudo;
    echo "</a>";
}

function p($conteudo, $id, $class) {
    echo "<p id='$id' class='$class'>";
    echo $conteudo;
    echo "</p>";
}

function ul($itens, $id, $class) {
    echo "<ul id='$id' class='$class'>";
    foreach ($itens as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}

function ol($itens, $id, $class) {
    echo "<ol id='$id' class='$class'>";
    foreach ($itens as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";
}