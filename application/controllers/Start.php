<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends MY_Controller {

    public function __construct()
	{
		parent::__construct();

		$this->load->library('cigniter-datatables/libraries/Datatables');
	}

	public function index()
	{
        $data = [
            'icon' => 'fa fa-paper-plane',
            'title' => 'Quick Start',
            'color' => 'green',
            'updated' => 'October 16th, 2018'
        ];

        $dt_authors = $this->datatables->new();

		$dt_authors->select('*')->from('authors');

		$dt_authors
			->style(array(
                'class' => 'table table-striped table-bordered',
			))
			->column('First Name', 'first_name')
			->column('Last Name', 'last_name')
			->column('Email', 'email');

		$this->datatables->init('dt_authors', $dt_authors);

		$this->templates->render('pages/start', $data);
	}
}
