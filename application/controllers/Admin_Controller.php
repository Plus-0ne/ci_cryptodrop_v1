<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['title'] = "Login | CRYPTODROP";
		$data = array
		(
			'admin_header' => $this->load->view('_template/admin/admin_header',$data),
			'admin_jsscript' => $this->load->view('_template/admin/admin_jsscripts'),
		);
		$this->load->view('pages/admin/login',$data);
	}

	public function Dashboard()
	{
		$title['title'] = "Dashboard | CRYPTODROP";

		$data['admin_header'] = $this->load->view('_template/admin/admin_header',$title);
		$data['admin_jsscript'] = $this->load->view('_template/admin/admin_jsscripts');
		$data['admin_nav'] = $this->load->view('_template/admin/admin_nav');
		
		$this->load->view('pages/admin/admin_dashboard',$data);
	}
	public function Airdrops()
	{
		$title['title'] = "Airdrops | CRYPTODROP";

		$data['admin_header'] = $this->load->view('_template/admin/admin_header',$title);
		$data['admin_jsscript'] = $this->load->view('_template/admin/admin_jsscripts');
		$data['admin_nav'] = $this->load->view('_template/admin/admin_nav');
		
		$this->load->view('pages/admin/admin_airdrops',$data);
	}
	public function Add_New_Entry()
	{
		$title['title'] = "New Entry | CRYPTODROP";

		$data['admin_header'] = $this->load->view('_template/admin/admin_header',$title);
		$data['admin_jsscript'] = $this->load->view('_template/admin/admin_jsscripts');
		$data['admin_nav'] = $this->load->view('_template/admin/admin_nav');
		
		$this->load->view('pages/admin/admin_newentry',$data);
	}

	/*public function Add_New_Entry()
	{
		$title['title'] = "New Entry | CRYPTODROP";

		$data['admin_header'] = $this->load->view('_template/admin/admin_header',$title);
		$data['admin_jsscript'] = $this->load->view('_template/admin/admin_jsscripts');
		$data['admin_nav'] = $this->load->view('_template/admin/admin_nav');
		
		$this->load->view('pages/admin/admin_newentry',$data);
	}*/

	public function Option_Platform()
	{
		$title['title'] = "Platforms | CRYPTODROP";

		$data['admin_header'] = $this->load->view('_template/admin/admin_header',$title);
		$data['admin_jsscript'] = $this->load->view('_template/admin/admin_jsscripts');
		$data['admin_nav'] = $this->load->view('_template/admin/admin_nav');
		
		$this->load->view('pages/admin/admin_optionplatform',$data);
	}
	public function Option_Requirements()
	{
		$title['title'] = "Requirements | CRYPTODROP";

		$data['admin_header'] = $this->load->view('_template/admin/admin_header',$title);
		$data['admin_jsscript'] = $this->load->view('_template/admin/admin_jsscripts');
		$data['admin_nav'] = $this->load->view('_template/admin/admin_nav');
		
		$this->load->view('pages/admin/admin_optionrequirement',$data);
	}
	
}
