<?php
namespace core;
class View{
    public $file;
    public $vars=[];
    public function make($file){
        $this->file="View/".$file.".php";
        return $this;
    }
    public function wish($name,$value){
        $this->vars[$name]=$value;
        return $this;
    }
    public function __toString(){
        extract($this->vars);
        include $this->file;
        return '';
    }
}
?>