<?hh


function id($x) { return $x; }

class c {}

<<__EntryPoint>> function main(): void {
  $name = 'varname';

  $x = $undef['foo'];

  $x = $GLOBALS[$name]['foo'];
  $x = $GLOBALS[id($name)]['foo'];
}
