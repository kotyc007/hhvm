<?php
namespace test;

class Test {
    static function foo() {
        echo __CLASS__,"::",__FUNCTION__,"\n";
    }
}

function foo() {
    echo __FUNCTION__,"\n";
}
<<__EntryPoint>> function main() {
foo();
\test\foo();
\test\test::foo();
}
