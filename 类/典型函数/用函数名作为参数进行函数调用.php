<?php

function a($b, $c) {
    echo $b."\n";
    echo $c."\n";
}

// a 是函数名 后面就是参数
call_user_func('a', '111', '222');

call_user_func('a', '333', '444');


echo "-------------------------\n";


class A {
    function say($name) {
        echo $name."\n";
    }

    function walk($name, $height) {
        echo $name.", ".$height."\n";
    }
}

// 等同于调用 A.say("xiao.hu")
@call_user_func(array('A', 'say'), 'xiao.hu');
// 效果一样
call_user_func(array('A', 'say'), 'xiao.hu');

echo "-------------------------\n";

call_user_func(array('A', 'walk'), 'xiao.hu', 1.75);

call_user_func_array(array('A', 'walk'), array('xiao.hu', 1.75));
?>