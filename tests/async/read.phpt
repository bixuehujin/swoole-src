--TEST--
Test for swoole_async_read()
--SKIPIF--
<?php if (!extension_loaded("swoole")) print "skip"; ?>
--FILE--
<?php
swoole_async_read(__FILE__, function ($file, $content) {
    echo $file . PHP_EOL;
    echo $content . PHP_EOL;
    swoole_event_exit();
}, 10);
--EXPECTF--
%s
<?php
swoo
