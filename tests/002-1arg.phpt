--TEST--
Check for execute with magic ('modules/magic.so')
--SKIPIF--
<?php
if ( ! extension_loaded ('magic') ) {
    print 'skip';
}
?>
--POST--
--GET--
--INI--
--FILE--
<?php

if ( filemagic ('modules/magic.so') == false )
	echo 'skip';
else
	echo "filemagic ('modules/magic.so') success";

?>
--EXPECT--
filemagic ('modules/magic.so') success
