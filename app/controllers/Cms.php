<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	public function index()
	{

	}

    public function contact()
	{
		$this->load->view('main/header');
		$this->load->view('cms/contact');
		$this->load->view('main/footer');
	}

    public function about()
	{
		$this->load->view('main/header');
		$this->load->view('cms/about');
		$this->load->view('main/footer');
	}

    public function policy()
	{
		$this->load->view('main/header');
		$this->load->view('cms/policy');
		$this->load->view('main/footer');
	}

    public function faq()
	{
		$this->load->view('main/header');
		$this->load->view('cms/faq');
		$this->load->view('main/footer');
	}

    public function careers()
	{
		$this->load->view('main/header');
		$this->load->view('cms/careers');
		$this->load->view('main/footer');
	}
}
