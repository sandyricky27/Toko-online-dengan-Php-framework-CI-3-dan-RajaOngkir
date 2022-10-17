<?php

class Kategori extends CI_Controller
{

    public function __construct()
    {
            parent::__construct();
            $this->load->model('m_kategori');
            $this->load->model('m_admin');
    }

    public function index()
    {
        $data = array(
            'title' => 'Kategori',
            'pesanan_masuk_notif' => $this->m_admin->pesanan_masuk_notif(),
            'kategori' => $this->m_kategori->get_all_data(),
            'isi'   => 'admin/v_kategori', 
        );
        $this->load->view('layout/v_wrapper_backend',$data, FALSE);
    }

    public function add()
    {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->m_kategori->add($data);
        $this->session->set_flashdata('pesan','Data Berhasil ditambahkan !');
        redirect('kategori');
    }

    public function edit($id_kategori= NULL)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->m_kategori->edit($data);
        $this->session->set_flashdata('pesan','Data Berhasil di edit !');
        redirect('kategori');
    }

    public function delete ($id_kategori = NULL)
    {
        $data=array('id_kategori' => $id_kategori);
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan','Data Berhasil di Delete !');
        redirect('kategori');
    }

}
