--TEST--
Test for swoole_async_readfile()
--SKIPIF--
<?php if (!extension_loaded("swoole")) print "skip"; ?>
--FILE--
<?php
swoole_async_readfile(__FILE__, function ($file, $content) {
    echo $file . PHP_EOL;
    echo $content . PHP_EOL;
    swoole_event_exit();
});
--EXPECTF--
%s
<?php
swoole_async_readfile(__FILE__, function ($file, $content) {
    echo $file . PHP_EOL;
    echo $content . PHP_EOL;
    swoole_event_exit();
});
