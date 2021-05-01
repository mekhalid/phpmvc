<?php 

class About extends Controller {
	public function index($nama = 'Ilham Khalid', $pekerjaan = 'Freelance')
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['judul'] = 'About';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footers');
	}
	public function page()
	{
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footers');
	}
}