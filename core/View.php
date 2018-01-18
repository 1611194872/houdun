<?php
namespace core;
class View{
    public $file;
    public $vars=[];
    public function  make($file){
        $this->file='view/'.$file.'.php';
        return $this;
    }
    public function with($name,$value){
        $this->vars[$name]=$value;
        $vars=[
            'version'=>'版本2.0',
        ];
        return $this;
    }
    public function __toString(){
        extract($this->vars);
        $version='版本2.0';
        include $this->file;
        return '';
    }
}