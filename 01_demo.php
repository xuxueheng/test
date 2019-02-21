<?php

// 布尔类型/布尔值
//
// true 真,正确
//
// false 假,错误
//
// 布尔类型,布尔值,往往是判断或者比较的结果

// 是将 5>3 比较的结果赋值给变量$bool
//
// 注意:布尔值可以是比较判断的结果,可以直接给变量赋值为true或者false,赋值是PHP代码规范规定,true和false必须小写
//
// 注意:echo true的结果为1
//      echo false的结果为空
//
//

$bool1 = 5 > 3;

$bool2 = 5 < 3;

$bool3 = true;
$bool4 = false;

var_dump($bool1, $bool2, $bool3, $bool4);

echo $bool3, $bool4;
