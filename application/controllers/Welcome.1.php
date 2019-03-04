<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('cigniter-datatables/libraries/Datatables');
	}

	public function index()
	{
		$dt_authors = $this->datatables->new();
		$dt_posts 	= $this->datatables->new();

		$dt_authors->select('*')->from('authors');
		$dt_posts
			->select('authors.first_name, posts.title, posts.description')
			->from('posts')
			->join('authors', 'authors.id = posts.author_id');

		$dt_authors
			->style(array(
				'class' => 'table table-striped table-bordered',
			))
			->column('First Name', 'first_name')
			->column('Last Name', 'last_name')
			->column('Email', 'email');

		$dt_posts
			->set_options('searchDelay', '0')
			->style(array(
				'class' => 'table table-striped table-bordered',
			))
			->column('Author', 'first_name')
			->column('Title', 'title')
			->column('Description', 'description', function($data, $row){
				if (strlen($data) > 150) {
					return substr($data, 0, 150) . '...';
				}
				return $data;
			});

		$this->datatables->init('dt_authors', $dt_authors);
		$this->datatables->init('dt_posts', $dt_posts);
		
		$this->load->view('welcome_message');
	}
}
