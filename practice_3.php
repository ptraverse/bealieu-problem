<?php

require 'vendor/autoload.php';

//Show which values of q and r will satisfy q + r = 9^2
var_dump(\igorw\reasoned\run_star(function ($q, $r) {
	return \igorw\reasoned\pluso($q, $r, \igorw\reasoned\build_num(pow(9,2)) );
}));