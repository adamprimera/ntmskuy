<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authorization extends CI_Controller
{
    public function index()
    {
        $this->template->views('auths/login', null, true);
    }
}
