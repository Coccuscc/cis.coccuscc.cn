<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends AdminBase_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->smarty->display('admin/sysconf/setting.html');
    }
}
