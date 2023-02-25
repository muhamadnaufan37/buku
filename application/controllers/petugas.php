<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai petugas", "warning");');
            redirect('landing');
        }
    }

    public function index()
    {
        $data['page_title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template1/meta', $data);
        $this->load->view('template1/navbar', $data);
        $this->load->view('template1/sidebar', $data);
        $this->load->view('superadmin/index');
        $this->load->view('template1/js');
    }

    public function buku()
    {
        $this->load->model('M_data');
        $data = array(
            'allbuku' => $this->M_data->allbuku(),
        );

        $data['page_title'] = 'Panel Buku';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template1/meta', $data);
        $this->load->view('template1/navbar');
        $this->load->view('template1/sidebar', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('template1/js');
    }

    public function add_buku()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Panel Tambah Buku';
            $data['title'] = 'DISDUKCAPIL';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template1/meta', $data);
            $this->load->view('template1/navbar');
            $this->load->view('template1/sidebar', $data);
            $this->load->view('buku/add', $data);
            $this->load->view('template1/js');
        } else {
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                'author' => htmlspecialchars($this->input->post('author', true)),
                'publisher' => htmlspecialchars($this->input->post('publisher', true)),
                'tahun_terbit' => htmlspecialchars($this->input->post('tahun_terbit', true)),
                'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
                'rak_buku' => htmlspecialchars($this->input->post('rak_buku', true))
            ];

            $this->db->insert('buku', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been created!", "success");');
            redirect('admin/buku');
        }
    }

    public function edit_buku()
    {
        $input =  $this->input->get('id_buku', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('buku', ['id_buku' => $input])->row_array(),
        );

        $data['page_title'] = 'Edit buku';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template1/meta', $data);
        $this->load->view('template1/navbar');
        $this->load->view('template1/sidebar', $data);
        $this->load->view('buku/edit', $data);
        $this->load->view('template1/js');
    }

    public function update_buku()
    {
        $p = $this->input->post();
        $data = [
            'id_buku'               => $p['id_buku'],
            'judul'                    => $p['judul'],
            'author'                    => $p['author'],
            'publisher'                    => $p['publisher'],
            'tahun_terbit'               => $p['tahun_terbit'],
            'jumlah'              => $p['jumlah'],
            'rak_buku'              => $p['rak_buku'],
        ];

        $this->db->trans_start();
        $this->db->update('buku', $data, ['id_buku' => $p['id_buku']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
        redirect('admin/buku');
    }

    public function delete_buku($id_buku)
    {
        $this->db->trans_start();
        $this->db->delete('buku', ['id_buku' => $id_buku]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('admin/buku');
    }
}
