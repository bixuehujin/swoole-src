--TEST--
Test for swoole_table()
--SKIPIF--
<?php if (!extension_loaded("swoole")) print "skip"; ?>
--FILE--
<?php
$table = new swoole_table(1024);

$table->column('name', swoole_table::TYPE_STRING, 128);
$table->column('gender', swoole_table::TYPE_STRING, 12);
$table->create();

$table->set('t1', ['name' => 'name1', 'gender' => 'm']);
$table->set('t2', ['name' => 'name2', 'gender' => 'f']);

var_dump($table->get('t1'));
var_dump($table->get(3));

--EXPECTF--
array(2) {
  ["name"]=>
  string(5) "name1"
  ["gender"]=>
  string(1) "m"
}
bool(false)
