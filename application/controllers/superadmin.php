<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai superadmin", "warning");');
            redirect('landing');
        }
    }

	public function index()
	{
        // $this->load->model('M_data');
        // $data = array(
		// 	'jumlahpengaduan' => $this->M_data->jumlahpengaduan(),
		// 	'jumlahall' => $this->M_data->jumlahall(),
		// 	'jumlah0' => $this->M_data->jumlah0(),
		// 	'jumlah1' => $this->M_data->jumlah1(),
		// 	'jumlah2' => $this->M_data->jumlah2(),
        // );

		$data['page_title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template1/meta', $data);
		$this->load->view('template1/navbar');
		$this->load->view('template1/sidebar', $data);
		$this->load->view('superadmin/index');
		$this->load->view('template1/js');
	}

    public function akun()
    {
        $this->load->model('M_data');
        $data = array(
            'alluser' => $this->M_data->alluser(),
        );

        $data['page_title'] = 'Panel Akun';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template1/meta', $data);
		$this->load->view('template1/navbar');
		$this->load->view('template1/sidebar', $data);
        $this->load->view('superadmin/akun/index', $data);
		$this->load->view('template1/js');
    }

    public function add_akun()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Panel Tambah Akun';
            $data['title'] = 'DISDUKCAPIL';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template1/meta', $data);
            $this->load->view('template1/navbar');
            $this->load->view('template1/sidebar', $data);
            $this->load->view('superadmin/akun/add', $data);
            $this->load->view('template1/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)),
                'image' => 'default.jpg'
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created!", "success");');
            redirect('superadmin/akun');
        }
    }

    public function edit_akun()
    {
        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('user', ['id' => $input])->row_array(),
        );

        $data['page_title'] = 'Edit Akun';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template1/meta', $data);
		$this->load->view('template1/navbar');
		$this->load->view('template1/sidebar', $data);
        $this->load->view('superadmin/akun/edit', $data);
		$this->load->view('template1/js');
    }

    public function update_akun()
    {
        $p = $this->input->post();
        $data = [
            'id'               => $p['id'],
            'nama'                    => $p['nama'],
            'nip'                    => $p['nip'],
            'email'                    => $p['email'],
            'role_id'               => $p['role_id'],
            'is_active'              => $p['is_active'],
        ];

        $this->db->trans_start();
        $this->db->update('user', $data, ['id' => $p['id']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
        redirect('superadmin/akun');
    }

    public function delete_akun($id)
    {
        $this->db->trans_start();
        $this->db->delete('user', ['id' => $id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('superadmin/akun');
    }

    // public function tamu()
    // {
    //     $this->load->model('M_data');
    //     $data = array(
    //         'alltamu' => $this->M_data->alltamu(),
    //     );

    //     $data['page_title'] = 'Panel Daftar Tamu';
    //     $data['title'] = 'DISDUKCAPIL';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $this->load->view('template/meta', $data);
    //     $this->load->view('template/navbar');
    //     $this->load->view('template/sidebar');
    //     $this->load->view('tamu/index', $data);
    //     $this->load->view('template/footer');
    //     $this->load->view('template/js');
    // }

    // public function edit_tamu()
    // {
    //     $input =  $this->input->get('id_tamu', TRUE);
    //     $this->load->model('M_data');
    //     $data = array(
    //         'edit' => $this->db->get_where('tamu', ['id_tamu' => $input])->row_array(),
    //     );

    //     $data['page_title'] = 'Edit tamu';
    //     $data['title'] = 'DISDUKCAPIL';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $this->load->view('template/meta', $data);
    //     $this->load->view('template/navbar');
    //     $this->load->view('template/sidebar');
    //     $this->load->view('tamu/edit', $data);
    //     $this->load->view('template/footer');
    //     $this->load->view('template/js');
    // }

    // public function update_tamu()
    // {
    //     $p = $this->input->post();
    //     $data = [
    //         'id_tamu'               => $p['id_tamu'],
    //         'nama'                    => $p['nama'],
    //         'jenis_identitas'                    => $p['jenis_identitas'],
    //         'nomor_identitas'                    => $p['nomor_identitas'],
    //         'keperluan'                    => $p['keperluan'],
    //     ];

    //     $this->db->trans_start();
    //     $this->db->update('tamu', $data, ['id_tamu' => $p['id_tamu']]);
    //     $this->db->trans_complete();
    //     $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
    //     redirect('superadmin/tamu');
    // }

    // public function delete_tamu($id_tamu)
    // {
    //     $this->db->trans_start();
    //     $this->db->delete('tamu', ['id_tamu' => $id_tamu]);
    //     $this->db->trans_complete();
    //     $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
    //     redirect('superadmin/tamu');
    // }

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
                'katagori' => htmlspecialchars($this->input->post('katagori', true)),
                'rak_buku' => htmlspecialchars($this->input->post('rak_buku', true))
            ];

            $this->db->insert('buku', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been created!", "success");');
            redirect('superadmin/buku');
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
            'katagori'              => $p['katagori'],
        ];

        $this->db->trans_start();
        $this->db->update('buku', $data, ['id_buku' => $p['id_buku']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
        redirect('superadmin/buku');
    }

    public function delete_buku($id_buku)
    {
        $this->db->trans_start();
        $this->db->delete('buku', ['id_buku' => $id_buku]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('superadmin/buku');
    }
}