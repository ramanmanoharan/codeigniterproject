<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('home');
		$this->load->view('inc/footer');
	}
	public function about()
	{
		$this->load->view('inc/header');
		$this->load->view('about');
		$this->load->view('inc/footer');
	}
	public function webdesign()
	{
		$this->load->view('inc/header');
		$this->load->view('webdesign');
		$this->load->view('inc/footer');
	}
	public function webdevelopment()
	{
		$this->load->view('inc/header');
		$this->load->view('webdevelopment');
		$this->load->view('inc/footer');
	}
	public function androiddevelopment()
	{
		$this->load->view('inc/header');
		$this->load->view('androiddevelopment');
		$this->load->view('inc/footer');
	}
	public function seo()
	{
		$this->load->view('inc/header');
		$this->load->view('seo');
		$this->load->view('inc/footer');
	}
	public function digitalmarketing()
	{
		$this->load->view('inc/header');
		$this->load->view('digitalmarketing');
		$this->load->view('inc/footer');
	}
	public function contact()
	{
		$this->load->view('inc/header');
		$this->load->view('contact');
		$this->load->view('inc/footer');
	}
	public function insert(){
		$this->load->model('insert_model');
		$data = array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'message'=>$this->input->post('message')
		);
		$res=$this->insert_model->form_insert($data);
		
    $this->session->set_flashdata('success', "SUCCESS_MESSAGE_HERE"); 

 
		$data['message'] = 'Data Inserted';
		$this->load->view('inc/header');
		$this->load->view('contact', $data);
		$this->load->view('inc/footer');
	}

}
