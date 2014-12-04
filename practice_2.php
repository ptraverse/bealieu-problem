<?php

require 'vendor/autoload.php';

//Show which values of q and r will satisfy q + r = 5
var_dump(\igorw\reasoned\run_star(function ($q, $r) {
	return \igorw\reasoned\pluso($q, $r, [1, 0, 1]);
}));

//Expecting [0,5],[1,4],[2,3]  i.e:
// => [0],[1, 0, 1] , [1],[0, 0, 1] , [0, 1],[1, 1]