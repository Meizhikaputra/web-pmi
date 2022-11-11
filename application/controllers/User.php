<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek gambar upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('user', '<div class="alert alert-success" role="alert">
            Berhasil Memperbarui Profile!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('current', '<div class="alert alert-danger" role="alert">
            Wrong Current Password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('current', '<div class="alert alert-danger" role="alert">
                New Password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('current', '<div class="alert alert-success" role="alert">
                    Password Berhasil di ubah!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    // METHOD PENDONOR SIANG

    public function pendonor()
    {
        $data['title'] = 'Data Pendonor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $keyword = $this->input->post('keyword');
        $config['total_rows'] = $this->User_model->total();
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['pendonor'] = $this->User_model->getSiang($config['per_page'], $data['start'], $keyword);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pendonor', $data);
        $this->load->view('templates/footer');
    }
    public function tambahpendonor()
    {
        $data['title'] = 'Tambah Pendonor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('tanggallahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('alamatrumah', 'Alamat rumah', 'required');
        $this->form_validation->set_rules('notelepon', 'No telepon', 'required');
        $this->form_validation->set_rules('donorkeberapa', 'Donor yang ke', 'required');
        $this->form_validation->set_rules('rhesus', 'Rhesus');
        $this->form_validation->set_rules('beratbadan', 'Berat badan');
        $this->form_validation->set_rules('nokantong', 'No kantong');
        $this->form_validation->set_rules('tempatdonor', 'Tempat donor');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambahpendonor', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->tambahPendonor();
            $this->session->set_flashdata('siang', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan!</div>');
            redirect('user/pendonor');
        }
    }

    public function hapus($id)
    {
        $this->User_model->hapusPendonor($id);
        $this->session->set_flashdata('siang', '<div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
        redirect('user/pendonor');
    }

    public function detailpendonor($id)
    {
        $data['title'] = 'Detail Pendonor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendonor'] = $this->User_model->detailPendonor($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detailpendonor', $data);
        $this->load->view('templates/footer');
    }

    public function ubahpendonor($id)
    {
        $data['title'] = 'Form Ubah Data Pendonor Siang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendonor'] = $this->User_model->detailPendonor($id);
        $data['jeniskelamin'] = ['Laki-laki', 'Perempuan'];
        $data['golongandarah'] = ['A', 'AB', 'B', 'O'];
        $data['ujisaring'] = ['BAIK', 'HIV', 'HCV', 'Hbsag', 'TPAH'];
        $data['macamdonor'] = ['Rutin', 'Sukarela'];
        $data['rhesus'] = ['+', '-'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('tanggallahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('alamatrumah', 'Alamat rumah', 'required');
        $this->form_validation->set_rules('notelepon', 'No telepon', 'required');
        $this->form_validation->set_rules('donorkeberapa', 'Donor yang ke', 'required');
        $this->form_validation->set_rules('rhesus', 'Rhesus', 'required');
        $this->form_validation->set_rules('beratbadan', 'Berat badan', 'required');
        $this->form_validation->set_rules('nokantong', 'No kantong', 'required');
        $this->form_validation->set_rules('tempatdonor', 'Tempat donor', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubahpendonor', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->ubahpendonor();
            $this->session->set_flashdata('siang', '<div class="alert alert-success" role="alert">
            Data Berhasil Diubah!</div>');
            redirect('user/pendonor');
        }
    }


    // METHOD DARAH DIAMBIL

    public function darahKeluar()
    {
        $data['title'] = 'Darah Keluar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['darah_keluar'] = $this->User_model->darahKeluar();
        $keyword = $this->input->post('keyword');

        $A1 = $this->db->get_where('data_pendonor', ['golongandarah' => 'A'])->num_rows();
        $A3 = $this->db->get_where('darah_keluar', ['golongandarah' => 'A'])->num_rows();
        $data['A'] = $A1 - $A3;

        $B1 = $this->db->get_where('data_pendonor', ['golongandarah' => 'B'])->num_rows();
        $B3 = $this->db->get_where('darah_keluar', ['golongandarah' => 'B'])->num_rows();
        $data['B'] = $B1  - $B3;

        $AB1 = $this->db->get_where('data_pendonor', ['golongandarah' => 'AB'])->num_rows();
        $AB3 = $this->db->get_where('darah_keluar', ['golongandarah' => 'AB'])->num_rows();
        $data['AB'] = $AB1 - $AB3;

        $O1 = $this->db->get_where('data_pendonor', ['golongandarah' => 'O'])->num_rows();
        $O3 = $this->db->get_where('darah_keluar', ['golongandarah' => 'O'])->num_rows();
        $data['O'] = $O1 - $O3;

        // PAGINATION
        // CONFIG
        $config['base_url'] = 'http://localhost/ci-pmi/user/darahkeluar';
        $config['total_rows'] = $this->User_model->totalkeluar();
        $config['per_page'] = 10;
        // STYLE
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];



        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['darah_keluar'] = $this->User_model->getKeluar($config['per_page'], $data['start'], $keyword);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/darahkeluar', $data);
        $this->load->view('templates/footer');
    }

    public function tambahkeluar()
    {

        $data['title'] = 'Data Pengambilan Darah';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nokantong', 'No kantong', 'required');
        $this->form_validation->set_rules('rumahsakit', 'Rumah Sakit', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambahkeluar', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->tambahKeluar();
            $this->session->set_flashdata('keluar', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan!</div>');
            redirect('user/darahkeluar');
        }
    }

    public function ubahkeluar($id)
    {
        $data['title'] = 'Form Ubah Data Darah Keluar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendonor'] = $this->db->get_where('darah_keluar', ['id' => $id])->row_array();
        $data['golongandarah'] = ['A', 'AB', 'B', 'O'];


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nokantong', 'No kantong', 'required');
        $this->form_validation->set_rules('rumahsakit', 'Rumah Sakit', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubahkeluar', $data);
            $this->load->view('templates/footer');
        } else {
            $this->User_model->ubahKeluar();
            $this->session->set_flashdata('keluar', '<div class="alert alert-success" role="alert">
            Data Berhasil Diubah!</div>');
            redirect('user/darahkeluar');
        }
    }
    public function detailKeluar($id)
    {
        $data['title'] = 'Detail Pengambil';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['keluar'] = $this->User_model->detailKeluar($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detailkeluar', $data);
        $this->load->view('templates/footer');
    }

    public function hapusKeluar($id)
    {
        $this->User_model->hapusKeluar($id);
        $this->session->set_flashdata('keluar', '<div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
        redirect('user/darahkeluar');
    }

    public function cari()
    {
        $data['title'] = 'Data Pendonor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->library('pagination');
        $keyword = $this->input->post('keyword');
        $config['total_rows'] = $this->User_model->total();
        $config['per_page'] = 100;
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['pendonor'] = $this->User_model->getSiang($config['per_page'], $data['start'], $keyword);


        // $data['pendonor'] = $this->User_model->cari($keyword);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pendonor', $data);
        $this->load->view('templates/footer');
    }

    public function print($id)
    {
        $data['title'] = 'Detail Pendonor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pendonor'] = $this->db->get_where('data_pendonor', ['id' => $id])->row_array();


        $this->load->view('user/print', $data);
    }
    public function printkeluar($id)
    {
        $data['title'] = 'Detail Pendonor';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['keluar'] = $this->db->get_where('darah_keluar', ['id' => $id])->row_array();


        $this->load->view('user/printkeluar', $data);
    }
}
