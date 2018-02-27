<?php
//HTML Helper
require 'HTMLHelper.php';


function heading($text, $h, $attributes) {
    
    echo "<$h>$text</$h>";
}