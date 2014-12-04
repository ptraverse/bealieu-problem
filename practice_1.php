<?php

/**
 * Practicing using relational programming with igorw's "Reasoned-PHP"
 * See https://igor.io/2014/08/06/reasoned-php.html
 */

require 'vendor/autoload.php';

//Show which values of q will satisfy q + 2 = 5 
//Note that the func's in oleg-numbers accept little endian binaries eg 6 = [0, 1, 1]
var_dump(\igorw\reasoned\run_star(function ($q) {
	return \igorw\reasoned\pluso($q, [0, 1], [1, 0, 1]);
}));

//Expecting 3, i.e:
// => [1, 1] 