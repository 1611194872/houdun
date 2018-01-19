<?php
namespace web\controller;
use core\View;
class Index{
    public function entry(){
        return (new View())->make('index')->wish('vs','女偶女偶');
    }
}