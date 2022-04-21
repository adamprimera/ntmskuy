<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function index()
    {
        $this->template->views('Employee/index', null);
    }

    public function manage()
    {
        $this->template->views('Employee/manage', null);
    }
}
