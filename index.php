<?php
//要哪个类文件就载入那个类文件
include "vendor/autoload.php";
//实例化总管家
(new \core\Boot())->run();
?>