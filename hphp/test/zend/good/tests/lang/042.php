<?php
class A {
    const B = 'foo';
}
<<__EntryPoint>> function main() {
$classname       =  'A';
$wrongClassname  =  'B';

echo $classname::B."\n";
echo $wrongClassname::B."\n";
echo "===DONE===\n";
}
