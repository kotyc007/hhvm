<?php <<__EntryPoint>> function main() {
$stat_result = stat(__FILE__);
clearstatcache();
$fp = fopen (__FILE__, 'r');
$fstat_result = fstat($fp);
fclose($fp);

$isWin = (substr(PHP_OS, 0, 3) == 'WIN');
$failed = false;
foreach($stat_result as $key =>$value) {
   if ($isWin && ($key === 0 || $key === 6 || $key === 'dev' || $key === 'rdev')) {
      // windows, dev and rdev will not match this is expected
   }
   else {
       if ($fstat_result[$key] != $value) {
          echo "FAIL: stat differs at '$key'. $fstat_result[$key] -- $value\n";
          $failed = true;
       }
   }
}
if ($failed !== true) {
   echo "PASSED: all elements are the same\n";
}


echo "===DONE===\n";
}
