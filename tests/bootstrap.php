<?php
// TESTING BOOTSTRAP
require_once __DIR__.'/../vendor/autoload.php';
// TESTING FRAMEWORK
require_once __DIR__.'/../vendor/10quality/ayuco/tests/framework/class.AyucoTestCase.php';
require_once __DIR__.'/../vendor/10quality/ayuco/tests/framework/class.AyucoBuilder.php';
// Constant
define('FRAMEWORK_PATH', __DIR__);
define('WPMVC_AYUCO', FRAMEWORK_PATH.'/environment/ayuco');