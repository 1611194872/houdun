<?php
namespace core;
class Boot{
    public static function run(){
        self::parseGet();
    }
    public static function parseGet(){
        if (isset($_GET['s'])){
             $info=explode('/',$_GET['s']);
             $c='web\contro'
        }
    }
}



?>