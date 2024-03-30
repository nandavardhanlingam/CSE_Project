<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function Facilities()
	{
		$this->load->view('Facilities');
	}
	public function Courses()
	{
		$this->load->view('courses');
	}
	public function People()
	{
		$this->load->view('people');
	}
	public function Research()
	{
		$this->load->view('research');
	}
	public function Events()
	{
		$this->load->view('events');
	}
	public function EResourses()
	{
		$this->load->view('eResourses');
	}
	public function contactUs()
	{
		$this->load->view('contact-us');
	}
}
