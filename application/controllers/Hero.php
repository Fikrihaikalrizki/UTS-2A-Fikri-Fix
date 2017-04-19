<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hero extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Hero');
		$this->load->model('Model_Jenis');
	}
	public function index($id)
	{
		$data['data_pegawai']=$this->Model_Jenis->getHeroById($id);
		$this->load->view('hero',$data);	
	}
	public function all()
	{
		$data['data_pegawai']=$this->Model_Jenis->getHeroAll();
		$this->load->view('hero',$data);	
	}
	public function addData() 
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if($this->form_validation->run()==FALSE){
			$data['data_pegawai']=$this->Model_Jenis->getDataJenis();
			$this->load->view('addHero',$data);

		}
		else{

			$config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
                {
                        $error['data'] = "eror";
						$this->load->view('addHero',$error);
                }
                else
                {
						$this->Model_Hero->addData();
						header("location:".site_url("Hero/all"));
				}
		}	


		
	}
	public function edit($id) 
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if($this->form_validation->run()==FALSE){
		$data['data_pegawai']=$this->Model_Jenis->getHero($id);
		$data['data']=$this->Model_Jenis->getDataJenis();
		$this->load->view('editHero',$data);

		}
		else{

			$config['upload_path']          = './assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000000;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
                {
                        $error['data'] = "eror";
						$this->load->view('editHero',$error);
                }
                else
                {
						$this->Model_Hero->editData($id);
						header("location:".site_url("Hero/all"));
				}
		}
	}
	
	public function delete($id)
	{
		$where=array('id'=>$id);
		$this->load->model('Model_Hero');
		$this->Model_Hero->deleteData($id);
	header("location:".site_url("Hero/all"));
	}	

}

/* End of file Pemain.php */
/* Location: ./application/controllers/Pemain.php */
?>