<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flights extends CI_Controller {

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('flights/list');
		$this->load->view('main/footer');
	}

    public function details()
	{
		$this->load->view('main/header');
		$this->load->view('flights/details');
		$this->load->view('main/footer');
	}

    public function booking()
	{
		$this->load->view('main/header');
		$this->load->view('flights/booking');
		$this->load->view('main/footer');
	}

    public function pay()
	{
		$this->load->view('main/header');
		$this->load->view('flights/booking_pay');
		$this->load->view('main/footer');
	}
}
