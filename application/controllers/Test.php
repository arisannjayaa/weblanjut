<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'judul'  => 'home',
			'text' 	 => 'ini halaman home',
			'footer' => 'ini footer home'
		];

		$this->load->view('template/header', $data);
		$this->load->view('parser/test2', $data);
		$this->load->view('template/footer', $data);
	}

	public function tempt()
	{
		$data = [
			'judul' 	=> 'help',
			'text' 		=> 'ini halaman help',
			'footer'	=> 'ini footer help'
		];

		$this->load->view('template/header', $data);
		$this->load->view('parser/help', $data);
		$this->load->view('template/footer', $data);
	}

	public function temp()
	{
		$template = 'Hello, {firstname} {lastname}';
		$data = array(
			'title' 		=> 'Ms',
			'firstname' => 'Ayu',
			'lastname' 	=> 'Tari'
		);

		$this->parser->parse_string($template, $data);
	}

	public function temp2()
	{
		$template = 'Hello, {degrees} {firstname} {lastname} {titles} {degree} {/titles}';
		$data = array(
			'degrees' 	=> 'Ms',
			'firstname' => 'Ayu',
			'lastname' 	=> 'Tari',
			'titles' 		=> array(
				array('degree' => 'S.kom'),
				array('degree' => 'M.kom')
			)
		);
		$this->parser->parse_string($template, $data);
	}

	public function temp3()
	{
		$data = array(
			'blog_title' 		=> 'My Blog Title',
			'blog_heading' 	=> 'My Blog Heading',
		);

		$string = $this->parser->parse('parser/test', $data);
	}

	public function temp4()
	{
		$data = array(
			'blog_title' 		=> 'Web Lanjut',
			'blog_heading' 	=> 'Belajar Web Lanjut',
			'blog_entries' 	=> array(
				array(
					'title' => 'materi 1',
					'body' 	=> 'crud'
				)
			)
		);

		$string = $this->parser->parse('parser/test', $data);
	}
}


/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
