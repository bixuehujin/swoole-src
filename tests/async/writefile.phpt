--TEST--
Test for swoole_async_writefile()
--SKIPIF--
<?php if (!extension_loaded("swoole")) print "skip"; ?>
--FILE--
<?php
$filename = __DIR__ . rand(0, 1000) . '.tmp';
swoole_async_writefile($filename, 'foobar', function ($file, $written) {
    var_dump($written);
    unlink($file);
    swoole_event_exit();
});
--EXPECTF--
int(6)
