<?php
class A {
    public    static $b = 'foo';
}
<<__EntryPoint>> function main() {
$classname       =  'A';
$wrongClassname  =  'B';

echo $classname::$b."\n";
echo $wrongClassname::$b."\n";

echo "===DONE===\n";
}
