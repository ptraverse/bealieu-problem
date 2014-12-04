<?php

namespace igorw\reasoned;

require 'vendor/autoload.php';

//Show which values of q will satisfy q^2 = 2^4 = 16   
var_dump(run_star(function ($q) {
	return expo($q, [0, 1], [0, 0, 0, 0, 1] );
}));

//Expecting 4, ie:
// [0, 0, 1]


//More Readable, same thing:
var_dump(run_star(function ($q) {
	return expo($q, build_num(2), build_num(16) );
}));