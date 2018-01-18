<?php
namespace core;
class Boot{
    public static function run(){
        self::parseGet();
    }
    public static function parseGet(){
        if (isset($_GET['s'])){
             $info=explode('/',$_GET['s']);
             $c='web\controller\\'.ucfirst($info[0]);
             $a=$info[1];
        }else{
            $c='web\controller\Index';
            $a='entry';
        }
    }
}



?>