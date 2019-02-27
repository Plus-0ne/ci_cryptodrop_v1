<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main_Controller extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		redirect('Updates');
	}
	public function airdrop_updates()
	{	
		$data['title'] = "Airdrops Updates | CRYPTODROP";
		$template_header = $this->load->view('_template/users/header',$data);
		$this->load->view('pages/users/airdrop_updates',$template_header);
	}
	public function Airdrops()
	{
		$data['title'] = "List of Airdrops | CRYPTODROP";
		$template_header = $this->load->view('_template/users/header',$data);
		$this->load->view('pages/users/all_airdrops',$template_header);
	}

	public function upcoming_airdrops()
	{
		$data['title'] = "Upcoming Airdrops | CRYPTODROP";
		$template_header = $this->load->view('_template/users/header',$data);
		$this->load->view('pages/users/upcoming_airdrops',$template_header);
	}

	public function contact_us()
	{
		$data['title'] = "Contact Us | CRYPTODROP";
		$template_header = $this->load->view('_template/users/header',$data);
		$this->load->view('pages/users/contact_us',$template_header);
	}
	public function frequently_asked_questions()
	{
		$data['title'] = "Contact Us | CRYPTODROP";
		$template_header = $this->load->view('_template/users/header',$data);
		$this->load->view('pages/users/airdrop_faqs',$template_header);
	}
	
}
