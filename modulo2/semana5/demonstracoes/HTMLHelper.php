<?php

class HTMLHelper {

    //public $teste;

    public static function h1($content, $id = '', $class = '')
    {
        //echo $this->teste;
        return "<h1 id='$id' class='$class'>$content</h1> \n";
    }

    public static function h2($content, $id = '', $class = '')
    {
        return "<h2 id='$id' class='$class'>$content</h2> \n";
    }

}