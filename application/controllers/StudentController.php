<?php

class StudentController extends CI_Controller {
    // kalo mau semua pake database pada satu controller
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }

    // kalo mau semua pake model pada satu controller
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StudentModel');
        $this-> load->library('form_validation');
    }

    public function index()
    {
        // kalo mau ambil database per function
        // $this->load->database();

        $data['judul'] = 'Sign Up';

        // $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        // if ( $this->input->post('keyword')) {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        // }

        $this->form_validation->set_rules('username','Username', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('templates/header', $data);
                $this->load->view('student/signup_view');
                $this->load->view('templates/footer');
        }
        else
        {
                $this->StudentModel->addSignup();
                // $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('studentcontroller');
        }
        

    }

    // public function tambah()
    // {
        // $data['judul'] = 'Form Tambah Data Mahasiswa';

        // $this->form_validation->set_rules('nama','Nama', 'required');
        // $this->form_validation->set_rules('nrp','NRP', 'required|numeric');
        // $this->form_validation->set_rules('email','Email', 'required|valid_email');
        
        // if ($this->form_validation->run() == FALSE)
        // {
        //         $this->load->view('templates/header', $data);
        //         $this->load->view('mahasiswa/tambah');
        //         $this->load->view('templates/footer');
        // }
        // else
        // {
        //         $this->Mahasiswa_model->tambahDataMahasiswa();
        //         $this->session->set_flashdata('flash', 'ditambahkan');
        //         redirect('mahasiswa');
        // }
    // }

    // public function hapus($id)
    // {
    //     $this->Mahasiswa_model->hapusDataMahasiswa($id);
    //     $this->session->set_flashdata('flash', 'dihapus');
    //     redirect('mahasiswa');
    // }

    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Data Mahasiswa';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('mahasiswa/detail', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function ubah($id)
    // {
    //     $data['judul'] = 'Form Ubah Data Mahasiswa';
    //     $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
    //     $data['jurusan'] = [
    //         'Teknik Informatika',
    //         'Teknik Industri',
    //         'Teknik Pangan',
    //         'Teknik Mesin',
    //         'Teknik Planologi',
    //         'Teknik Lingkungan'];

    //     $this->form_validation->set_rules('nama','Nama', 'required');
    //     $this->form_validation->set_rules('nrp','NRP', 'required|numeric');
    //     $this->form_validation->set_rules('email','Email', 'required|valid_email');
        
    //     if ($this->form_validation->run() == FALSE)
    //     {
    //             $this->load->view('templates/header', $data);
    //             $this->load->view('mahasiswa/ubah', $data);
    //             $this->load->view('templates/footer');
    //     }
    //     else
    //     {
    //             $this->Mahasiswa_model->ubahDataMahasiswa();
    //             $this->session->set_flashdata('flash', 'diubah');
    //             redirect('mahasiswa');
    //     }
    // }
}