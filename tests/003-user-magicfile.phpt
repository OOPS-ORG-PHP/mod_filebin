--TEST--
Check for using user magic file
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
if ( filemagic ('modules/magic.so', '/usr/share/misc/magic.mgc') == false )
	echo 'skip';
else
	echo "using user magic file success";

?>
--EXPECT--
using user magic file success
