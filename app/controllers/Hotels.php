<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotels extends CI_Controller {

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('hotels/list');
		$this->load->view('main/footer');
	}

    public function details()
	{
		$this->load->view('main/header');
		$this->load->view('hotels/details');
		$this->load->view('main/footer');
	}

    public function booking()
	{
		$this->load->view('main/header');
		$this->load->view('hotels/booking');
		$this->load->view('main/footer');
	}

    public function pay()
	{
		$this->load->view('main/header');
		$this->load->view('hotels/booking_pay');
		$this->load->view('main/footer');
	}
}
