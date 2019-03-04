<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates {

    private $ci;

    private $template_master = '';

    private $template_data = array();

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function set_master($template_master)
    {
        $this->template_master = $template_master;
    }

    public function title($title)
    {
        $this->template_data['TEMPLATE_TITLE'] = $title;
    }

    public function render($viewname, $data = [])
    {
        $this->template_data['TEMPLATE_RENDER'] = $viewname;

        $this->ci->load->view($this->template_master, array_merge($this->template_data, $data));
    }

}
