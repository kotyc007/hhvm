<?php
class myHeap extends SplHeap {
    public function compare($a, $b) {
        if ($a > $b) {
            $result = 1;
        } else if ($a < $b) {
            $result = -1;
        } else {
            $result = 0;
        }
        return $result;
    }
}
<<__EntryPoint>> function main() {
$h = new myHeap;

$in = range(0,10);
shuffle(&$in);
foreach ($in as $i) {
    $h->insert($i);
}

foreach ($h as $out) {
    echo $out."\n";
}
echo "===DONE===\n";
}
