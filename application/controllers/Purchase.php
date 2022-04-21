<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{
    public function index()
    {
        $this->template->views('purchase/index', null);
    }

    public function request()
    {
        $this->template->views('purchase/request', null);
    }
}
