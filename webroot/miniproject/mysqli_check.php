<?php
  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    print 'mysqli not installed.'; }
  else {
    print 'mysqli installed.'; }
?>
