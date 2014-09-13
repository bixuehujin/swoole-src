--TEST--
Test for swoole_async_write()
--SKIPIF--
<?php if (!extension_loaded("swoole")) print "skip"; ?>
--FILE--
<?php

$fileName = __DIR__ . '/data.txt';

for($i=0; $i<2; $i++)
{
    swoole_async_write($fileName, str_repeat('S', 8192), -1, function($file, $writen) {
        echo "write [$writen]\n";
        return true;
    });
}

--EXPECTF--
write [8192]
write [8192]
