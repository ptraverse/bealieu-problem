<?php

require 'vendor/autoload.php';

//Show which values of q and r will satisfy q^2 + r^2 = 5^2 
var_dump(\igorw\reasoned\run_star(function ($q, $r) {
	return \igorw\reasoned\pluso(pow($q,2), pow($r,2), \igorw\reasoned\build_num(pow(5,2)) );
}));

//Pukes once it gets here. Will continue playing with this a bit more...