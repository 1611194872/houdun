<?php
//命名空间名和文件夹命名一样
namespace core;
//定义一个类，相当于这个框架的总管家，由这个类来分配
class Boot{
    public function run(){
        $this->parseGet();
    }
    private function parseGet(){
//        判断是否有get参数
        if (isset($_GET['s'])){
//            如果有git参数，这个参数是一个字符串，需要分割成数组形式
            $info=explode('/',$_GET['s']);
            $c="web\\controller\\".ucfirst($info[0]);
            $f=$info[1];

        }else{
            $c="web\\controller\\Index";
            $f="entry";
        }
        echo (new $c())->$f();
    }
}











?>