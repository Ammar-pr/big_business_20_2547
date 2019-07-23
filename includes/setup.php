<?php
// load Smarty library
define('SMARTY_DIR', 'C:/xampp/htdocs/big_business_20_2547/smarty/libs/');

require(SMARTY_DIR . 'SmartyBC.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');
class Smarty_ES extends SmartyBC {
function Smarty_ES()
{
// Class Constructor.template_dir = '../templates/';
// These automatically get set with each new instance.
parent::__construct();
$this->template_dir = '../templates/';
$this->compile_dir = '../templates_c/';
$this->config_dir = '../configs/';
$this->cache_dir = '../cache/';


$this->assign('app_name', 'ES');
}
}
?>