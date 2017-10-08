<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pi extends CI_Controller {
    
    var $data_header = array(
        'current' => 'pi'
    );

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
		// $this->load->view('welcome_message');
        $this->load->view('header', $this->data_header);
        $this->load->view('private/utama');
        $this->load->view('footer');
	}
    
    public function pri()
	{
		// $this->load->view('welcome_message');
        $this->load->view('header', $this->data_header);
        $this->load->view('private/pi');
        $this->load->view('footer');
	}
    
    public function sis()
	{
		// $this->load->view('welcome_message');
        $this->load->view('header', $this->data_header);
        $this->load->view('private/sis');
        $this->load->view('footer');
	}
}
