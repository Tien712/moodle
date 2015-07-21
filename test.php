<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 21/07/2015
 * Time: 18:56
 */
echo "this is test file. Hello <br />";
$arr = array("a", "b", "c");
$arr2 = array("e","f");

$result = array_merge($arr, $arr2);

var_dump($result);