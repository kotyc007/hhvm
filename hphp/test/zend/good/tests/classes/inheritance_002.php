<?php
class Base_php4 {
  function Base_php4() {
    var_dump('Base constructor');
  }
}

class Child_php4 extends Base_php4 {
  function Child_php4() {
    var_dump('Child constructor');
    parent::Base_php4();
  }
}

class Base_php5 {
  function __construct() {
    var_dump('Base constructor');
  }
  }

class Child_php5 extends Base_php5 {
  function __construct() {
    var_dump('Child constructor');
    parent::__construct();
  }
  }

class Child_mx1 extends Base_php4 {
  function __construct() {
    var_dump('Child constructor');
    parent::Base_php4();
  }
}

class Child_mx2 extends Base_php5 {
  function Child_mx2() {
    var_dump('Child constructor');
    parent::__construct();
  }
}
<<__EntryPoint>> function main() {
echo "### PHP 4 style\n";
$c4= new Child_php4();

echo "### PHP 5 style\n";
$c5= new Child_php5();

echo "### Mixed style 1\n";
$cm= new Child_mx1();

echo "### Mixed style 2\n";
$cm= new Child_mx2();
}
