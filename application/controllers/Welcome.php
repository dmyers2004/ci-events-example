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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('welcome_message');
	}
	
	public function basic() {
		/*
		in the autoload.php we auto loaded event.php library
		then we loaded in some random library
		which registers a few listeners as a example
		*/
		
		/* the controller starts with */
		$input = 'Red in the controller';
		
		/* we fire in the trigger with the variable which is passed by reference */
		$this->event->trigger('red.flare',$input);
		
		/* now send it out to the view so you can see what we got! */		
		$this->load->view('input',['input'=>$input]);
	}
	
	public function priority() {
		/* the controller starts with */
		$input = 'priority in the controller';
		
		/* we fire in the trigger with the variable which is passed by reference */
		$this->event->trigger('priority.example',$input);
		
		/* now send it out to the view so you can see what we got! */		
		$this->load->view('input',['input'=>$input]);
	}	

	public function math() {
		/* the controller starts with */
		$a = 3;
		$b = 6;
		$c = '';
		
		/* we fire in the trigger with the variable which is passed by reference */
		$this->event->trigger('math.boom',$a,$b,$c);
		
		/* now send it out to the view so you can see what we got! */		
		$this->load->view('input',['input'=>$c]);
	}
	
	public function orders() {
		$input = 'start with controller add';
	
		$this->event->trigger('orders',$input);
	
		$this->load->view('input',['input'=>$input]);
	}
	
	public function new_example() {
		$user_name = 'Don Myers';
		$user_id = 685;
		$user_email = 'drpepper@example.com';
	
		$this->event->trigger('user.login',$user_name,$user_id,$user_email);
	
		$this->load->view('input',['input'=>$user_name]);
	}

	public function new_example_missing_args_no_error() {
		$user_name = 'Don Myers';
	
		$this->event->trigger('user.login',$user_name);
	
		$this->load->view('input',['input'=>$user_name]);
	}

	
} /* end class */
