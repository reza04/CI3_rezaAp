<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel');
    }
	public function index()
	{
        $data = $this->SiswaModel->getSiswa();
		$this->load->view('siswa/index', ['data'=>$data]);
	}
    public function error()
    {
        $this->load->view('siswa/error');
    }

    public function tambah()
    {
        $this->load->view('siswa/tambah');
    }
    public function action_tambah()
    {
        if($this->SiswaModel->simpan()){
            redirect(base_url('index.php/siswa/index'));
        }else{
            redirect(base_url('index.php/siswa/error/'));
        }
    }

    public function edit($id)
    {
        $data = $this->SiswaModel->getData($id);
        $this->load->view('siswa/edit',['data'=>$data]);
    }
    public function action_edit($id)
    {
        if($this->SiswaModel->edit($id)){
            redirect(base_url('index.php/siswa/index/'.$id));
        }else{
            redirect(base_url('index.php/siswa/error/'));
        }
    }
    public function delete($id)
    {
        if($this->SiswaModel->delete($id)){
            redirect(base_url('index.php/siswa/'));
        }
    }
}
