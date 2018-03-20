<?php

function my_var_dump(...$itens) {
    foreach ($itens as $item) {
        echo '<pre>';
        var_dump($item);
        echo '</pre>';
    }
    echo '<hr>';
}

function my_print_r(...$itens) {
    foreach ($itens as $item) {
        echo '<pre>';
        print_r($item);
        echo '</pre>';
    }
    echo '<hr>';
}