<?php

require_once "models/Caller.php";
require_once "models/Correspondent.php";
require_once "models/Standard.php";

$caller = new Caller();
$standard = new Standard();

$caller->entryPhoneBooth($standard);

$caller->standard->composeNumber('+41785466789');

$caller->standard->startCall();

$caller->standard->correspondent->pickUp();

sleep(5);
$caller->standard->endCall();

print_r($caller->standard);