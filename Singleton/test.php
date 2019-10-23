<?php

require('class.php');

// $o = new User; // ERROR
$o = User::getLocalInstance();
var_dump($o);