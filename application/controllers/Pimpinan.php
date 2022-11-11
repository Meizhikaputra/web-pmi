<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pimpinan extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tahun'] = $this->db->get('data_pendonor')->result_array();



        // CHart MAsuk Hari Ini
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
        // Chart Masuk
        $data['jan'] = $this->db->get_where('data_pendonor', ['bulan' => 1, 'tahun' => date('Y')])->num_rows();
        $data['feb'] = $this->db->get_where('data_pendonor', ['bulan' => 2, 'tahun' => date('Y')])->num_rows();
        $data['mar'] = $this->db->get_where('data_pendonor', ['bulan' => 3, 'tahun' => date('Y')])->num_rows();
        $data['apr'] = $this->db->get_where('data_pendonor', ['bulan' => 4, 'tahun' => date('Y')])->num_rows();
        $data['mei'] = $this->db->get_where('data_pendonor', ['bulan' => 5, 'tahun' => date('Y')])->num_rows();
        $data['jun'] = $this->db->get_where('data_pendonor', ['bulan' => 6, 'tahun' => date('Y')])->num_rows();
        $data['jul'] = $this->db->get_where('data_pendonor', ['bulan' => 7, 'tahun' => date('Y')])->num_rows();
        $data['ags'] = $this->db->get_where('data_pendonor', ['bulan' => 8, 'tahun' => date('Y')])->num_rows();
        $data['sep'] = $this->db->get_where('data_pendonor', ['bulan' => 9, 'tahun' => date('Y')])->num_rows();
        $data['okt'] = $this->db->get_where('data_pendonor', ['bulan' => 10, 'tahun' => date('Y')])->num_rows();
        $data['nov'] = $this->db->get_where('data_pendonor', ['bulan' => 11, 'tahun' => date('Y')])->num_rows();
        $data['des'] = $this->db->get_where('data_pendonor', ['bulan' => 12, 'tahun' => date('Y')])->num_rows();
        // Chart Keluar
        $data['jan2'] = $this->db->get_where('darah_keluar', ['bulan' => 1, 'tahun' => date('Y')])->num_rows();
        $data['feb2'] = $this->db->get_where('darah_keluar', ['bulan' => 2, 'tahun' => date('Y')])->num_rows();
        $data['mar2'] = $this->db->get_where('darah_keluar', ['bulan' => 3, 'tahun' => date('Y')])->num_rows();
        $data['apr2'] = $this->db->get_where('darah_keluar', ['bulan' => 4, 'tahun' => date('Y')])->num_rows();
        $data['mei2'] = $this->db->get_where('darah_keluar', ['bulan' => 5, 'tahun' => date('Y')])->num_rows();
        $data['jun2'] = $this->db->get_where('darah_keluar', ['bulan' => 6, 'tahun' => date('Y')])->num_rows();
        $data['jul2'] = $this->db->get_where('darah_keluar', ['bulan' => 7, 'tahun' => date('Y')])->num_rows();
        $data['ags2'] = $this->db->get_where('darah_keluar', ['bulan' => 8, 'tahun' => date('Y')])->num_rows();
        $data['sep2'] = $this->db->get_where('darah_keluar', ['bulan' => 9, 'tahun' => date('Y')])->num_rows();
        $data['okt2'] = $this->db->get_where('darah_keluar', ['bulan' => 10, 'tahun' => date('Y')])->num_rows();
        $data['nov2'] = $this->db->get_where('darah_keluar', ['bulan' => 11, 'tahun' => date('Y')])->num_rows();
        $data['des2'] = $this->db->get_where('darah_keluar', ['bulan' => 12, 'tahun' => date('Y')])->num_rows();
        // Chart Darah Masuk Bulan
        $t1 = $this->db->get_where('data_pendonor', ['tanggal' => 1, 'tahun' => date('Y')])->num_rows();
        $t2 = $this->db->get_where('data_pendonor', ['tanggal' => 2, 'tahun' => date('Y')])->num_rows();
        $t3 = $this->db->get_where('data_pendonor', ['tanggal' => 3, 'tahun' => date('Y')])->num_rows();
        $t4 = $this->db->get_where('data_pendonor', ['tanggal' => 4, 'tahun' => date('Y')])->num_rows();
        $t5 = $this->db->get_where('data_pendonor', ['tanggal' => 5, 'tahun' => date('Y')])->num_rows();
        $t6 = $this->db->get_where('data_pendonor', ['tanggal' => 6, 'tahun' => date('Y')])->num_rows();
        $t7 = $this->db->get_where('data_pendonor', ['tanggal' => 7, 'tahun' => date('Y')])->num_rows();
        $data['m1'] = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7;
        $t8 = $this->db->get_where('data_pendonor', ['tanggal' => 8, 'tahun' => date('Y')])->num_rows();
        $t9 = $this->db->get_where('data_pendonor', ['tanggal' => 9, 'tahun' => date('Y')])->num_rows();
        $t10 = $this->db->get_where('data_pendonor', ['tanggal' => 10, 'tahun' => date('Y')])->num_rows();
        $t11 = $this->db->get_where('data_pendonor', ['tanggal' => 11, 'tahun' => date('Y')])->num_rows();
        $t12 = $this->db->get_where('data_pendonor', ['tanggal' => 12, 'tahun' => date('Y')])->num_rows();
        $t13 = $this->db->get_where('data_pendonor', ['tanggal' => 13, 'tahun' => date('Y')])->num_rows();
        $t14 = $this->db->get_where('data_pendonor', ['tanggal' => 14, 'tahun' => date('Y')])->num_rows();
        $data['m2'] = $t8 + $t9 + $t10 + $t11 + $t12 + $t13 + $t14;
        $t15 = $this->db->get_where('data_pendonor', ['tanggal' => 15, 'tahun' => date('Y')])->num_rows();
        $t16 = $this->db->get_where('data_pendonor', ['tanggal' => 16, 'tahun' => date('Y')])->num_rows();
        $t17 = $this->db->get_where('data_pendonor', ['tanggal' => 17, 'tahun' => date('Y')])->num_rows();
        $t18 = $this->db->get_where('data_pendonor', ['tanggal' => 18, 'tahun' => date('Y')])->num_rows();
        $t19 = $this->db->get_where('data_pendonor', ['tanggal' => 19, 'tahun' => date('Y')])->num_rows();
        $t20 = $this->db->get_where('data_pendonor', ['tanggal' => 20, 'tahun' => date('Y')])->num_rows();
        $t21 = $this->db->get_where('data_pendonor', ['tanggal' => 21, 'tahun' => date('Y')])->num_rows();
        $data['m3'] = $t15 + $t16 + $t17 + $t18 + $t19 + $t20 + $t21;
        $t22 = $this->db->get_where('data_pendonor', ['tanggal' => 22, 'tahun' => date('Y')])->num_rows();
        $t23 = $this->db->get_where('data_pendonor', ['tanggal' => 23, 'tahun' => date('Y')])->num_rows();
        $t24 = $this->db->get_where('data_pendonor', ['tanggal' => 24, 'tahun' => date('Y')])->num_rows();
        $t25 = $this->db->get_where('data_pendonor', ['tanggal' => 25, 'tahun' => date('Y')])->num_rows();
        $t26 = $this->db->get_where('data_pendonor', ['tanggal' => 26, 'tahun' => date('Y')])->num_rows();
        $t27 = $this->db->get_where('data_pendonor', ['tanggal' => 27, 'tahun' => date('Y')])->num_rows();
        $t28 = $this->db->get_where('data_pendonor', ['tanggal' => 28, 'tahun' => date('Y')])->num_rows();
        $t29 = $this->db->get_where('data_pendonor', ['tanggal' => 29, 'tahun' => date('Y')])->num_rows();
        $t30 = $this->db->get_where('data_pendonor', ['tanggal' => 30, 'tahun' => date('Y')])->num_rows();
        $t31 = $this->db->get_where('data_pendonor', ['tanggal' => 31, 'tahun' => date('Y')])->num_rows();
        $data['m4'] = $t22 + $t23 + $t24 + $t25 + $t26 + $t27 + $t28 + $t29 + $t30 + $t31;
        // Chart Darah Keluar Bulan
        $t1 = $this->db->get_where('darah_keluar', ['tanggal' => 1, 'tahun' => date('Y')])->num_rows();
        $t2 = $this->db->get_where('darah_keluar', ['tanggal' => 2, 'tahun' => date('Y')])->num_rows();
        $t3 = $this->db->get_where('darah_keluar', ['tanggal' => 3, 'tahun' => date('Y')])->num_rows();
        $t4 = $this->db->get_where('darah_keluar', ['tanggal' => 4, 'tahun' => date('Y')])->num_rows();
        $t5 = $this->db->get_where('darah_keluar', ['tanggal' => 5, 'tahun' => date('Y')])->num_rows();
        $t6 = $this->db->get_where('darah_keluar', ['tanggal' => 6, 'tahun' => date('Y')])->num_rows();
        $t7 = $this->db->get_where('darah_keluar', ['tanggal' => 7, 'tahun' => date('Y')])->num_rows();
        $data['m1Q'] = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7;
        $t8 = $this->db->get_where('darah_keluar', ['tanggal' => 8, 'tahun' => date('Y')])->num_rows();
        $t9 = $this->db->get_where('darah_keluar', ['tanggal' => 9, 'tahun' => date('Y')])->num_rows();
        $t10 = $this->db->get_where('darah_keluar', ['tanggal' => 10, 'tahun' => date('Y')])->num_rows();
        $t11 = $this->db->get_where('darah_keluar', ['tanggal' => 11, 'tahun' => date('Y')])->num_rows();
        $t12 = $this->db->get_where('darah_keluar', ['tanggal' => 12, 'tahun' => date('Y')])->num_rows();
        $t13 = $this->db->get_where('darah_keluar', ['tanggal' => 13, 'tahun' => date('Y')])->num_rows();
        $t14 = $this->db->get_where('darah_keluar', ['tanggal' => 14, 'tahun' => date('Y')])->num_rows();
        $data['m2Q'] = $t8 + $t9 + $t10 + $t11 + $t12 + $t13 + $t14;
        $t15 = $this->db->get_where('darah_keluar', ['tanggal' => 15, 'tahun' => date('Y')])->num_rows();
        $t16 = $this->db->get_where('darah_keluar', ['tanggal' => 16, 'tahun' => date('Y')])->num_rows();
        $t17 = $this->db->get_where('darah_keluar', ['tanggal' => 17, 'tahun' => date('Y')])->num_rows();
        $t18 = $this->db->get_where('darah_keluar', ['tanggal' => 18, 'tahun' => date('Y')])->num_rows();
        $t19 = $this->db->get_where('darah_keluar', ['tanggal' => 19, 'tahun' => date('Y')])->num_rows();
        $t20 = $this->db->get_where('darah_keluar', ['tanggal' => 20, 'tahun' => date('Y')])->num_rows();
        $t21 = $this->db->get_where('darah_keluar', ['tanggal' => 21, 'tahun' => date('Y')])->num_rows();
        $data['m3Q'] = $t15 + $t16 + $t17 + $t18 + $t19 + $t20 + $t21;
        $t22 = $this->db->get_where('darah_keluar', ['tanggal' => 22, 'tahun' => date('Y')])->num_rows();
        $t23 = $this->db->get_where('darah_keluar', ['tanggal' => 23, 'tahun' => date('Y')])->num_rows();
        $t24 = $this->db->get_where('darah_keluar', ['tanggal' => 24, 'tahun' => date('Y')])->num_rows();
        $t25 = $this->db->get_where('darah_keluar', ['tanggal' => 25, 'tahun' => date('Y')])->num_rows();
        $t26 = $this->db->get_where('darah_keluar', ['tanggal' => 26, 'tahun' => date('Y')])->num_rows();
        $t27 = $this->db->get_where('darah_keluar', ['tanggal' => 27, 'tahun' => date('Y')])->num_rows();
        $t28 = $this->db->get_where('darah_keluar', ['tanggal' => 28, 'tahun' => date('Y')])->num_rows();
        $t29 = $this->db->get_where('darah_keluar', ['tanggal' => 29, 'tahun' => date('Y')])->num_rows();
        $t30 = $this->db->get_where('darah_keluar', ['tanggal' => 30, 'tahun' => date('Y')])->num_rows();
        $t31 = $this->db->get_where('darah_keluar', ['tanggal' => 31, 'tahun' => date('Y')])->num_rows();
        $data['m4Q'] = $t22 + $t23 + $t24 + $t25 + $t26 + $t27 + $t28 + $t29 + $t30 + $t31;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/index', $data);
        $this->load->view('templates/footer');
    }

    public function filter($tahun)
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tahun'] = $this->db->get('data_pendonor')->result_array();
        $data['year'] = $tahun;


        // Chart Masuk
        $data['jan'] = $this->db->get_where('data_pendonor', ['bulan' => 1, 'tahun' => $tahun])->num_rows();
        $data['feb'] = $this->db->get_where('data_pendonor', ['bulan' => 2, 'tahun' => $tahun])->num_rows();
        $data['mar'] = $this->db->get_where('data_pendonor', ['bulan' => 3, 'tahun' => $tahun])->num_rows();
        $data['apr'] = $this->db->get_where('data_pendonor', ['bulan' => 4, 'tahun' => $tahun])->num_rows();
        $data['mei'] = $this->db->get_where('data_pendonor', ['bulan' => 5, 'tahun' => $tahun])->num_rows();
        $data['jun'] = $this->db->get_where('data_pendonor', ['bulan' => 6, 'tahun' => $tahun])->num_rows();
        $data['jul'] = $this->db->get_where('data_pendonor', ['bulan' => 7, 'tahun' => $tahun])->num_rows();
        $data['ags'] = $this->db->get_where('data_pendonor', ['bulan' => 8, 'tahun' => $tahun])->num_rows();
        $data['sep'] = $this->db->get_where('data_pendonor', ['bulan' => 9, 'tahun' => $tahun])->num_rows();
        $data['okt'] = $this->db->get_where('data_pendonor', ['bulan' => 10, 'tahun' => $tahun])->num_rows();
        $data['nov'] = $this->db->get_where('data_pendonor', ['bulan' => 11, 'tahun' => $tahun])->num_rows();
        $data['des'] = $this->db->get_where('data_pendonor', ['bulan' => 12, 'tahun' => $tahun])->num_rows();
        // Chart Keluar
        $data['jan2'] = $this->db->get_where('darah_keluar', ['bulan' => 1, 'tahun' => $tahun])->num_rows();
        $data['feb2'] = $this->db->get_where('darah_keluar', ['bulan' => 2, 'tahun' => $tahun])->num_rows();
        $data['mar2'] = $this->db->get_where('darah_keluar', ['bulan' => 3, 'tahun' => $tahun])->num_rows();
        $data['apr2'] = $this->db->get_where('darah_keluar', ['bulan' => 4, 'tahun' => $tahun])->num_rows();
        $data['mei2'] = $this->db->get_where('darah_keluar', ['bulan' => 5, 'tahun' => $tahun])->num_rows();
        $data['jun2'] = $this->db->get_where('darah_keluar', ['bulan' => 6, 'tahun' => $tahun])->num_rows();
        $data['jul2'] = $this->db->get_where('darah_keluar', ['bulan' => 7, 'tahun' => $tahun])->num_rows();
        $data['ags2'] = $this->db->get_where('darah_keluar', ['bulan' => 8, 'tahun' => $tahun])->num_rows();
        $data['sep2'] = $this->db->get_where('darah_keluar', ['bulan' => 9, 'tahun' => $tahun])->num_rows();
        $data['okt2'] = $this->db->get_where('darah_keluar', ['bulan' => 10, 'tahun' => $tahun])->num_rows();
        $data['nov2'] = $this->db->get_where('darah_keluar', ['bulan' => 11, 'tahun' => $tahun])->num_rows();
        $data['des2'] = $this->db->get_where('darah_keluar', ['bulan' => 12, 'tahun' => $tahun])->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pimpinan/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function printFilter($year)
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tahun'] = $this->db->get('data_pendonor')->result_array();
        $data['year'] = $year;


        // Chart Masuk
        $data['jan'] = $this->db->get_where('data_pendonor', ['bulan' => 1, 'tahun' => $year])->num_rows();
        $data['feb'] = $this->db->get_where('data_pendonor', ['bulan' => 2, 'tahun' => $year])->num_rows();
        $data['mar'] = $this->db->get_where('data_pendonor', ['bulan' => 3, 'tahun' => $year])->num_rows();
        $data['apr'] = $this->db->get_where('data_pendonor', ['bulan' => 4, 'tahun' => $year])->num_rows();
        $data['mei'] = $this->db->get_where('data_pendonor', ['bulan' => 5, 'tahun' => $year])->num_rows();
        $data['jun'] = $this->db->get_where('data_pendonor', ['bulan' => 6, 'tahun' => $year])->num_rows();
        $data['jul'] = $this->db->get_where('data_pendonor', ['bulan' => 7, 'tahun' => $year])->num_rows();
        $data['ags'] = $this->db->get_where('data_pendonor', ['bulan' => 8, 'tahun' => $year])->num_rows();
        $data['sep'] = $this->db->get_where('data_pendonor', ['bulan' => 9, 'tahun' => $year])->num_rows();
        $data['okt'] = $this->db->get_where('data_pendonor', ['bulan' => 10, 'tahun' => $year])->num_rows();
        $data['nov'] = $this->db->get_where('data_pendonor', ['bulan' => 11, 'tahun' => $year])->num_rows();
        $data['des'] = $this->db->get_where('data_pendonor', ['bulan' => 12, 'tahun' => $year])->num_rows();
        // Chart Keluar
        $data['jan2'] = $this->db->get_where('darah_keluar', ['bulan' => 1, 'tahun' => $year])->num_rows();
        $data['feb2'] = $this->db->get_where('darah_keluar', ['bulan' => 2, 'tahun' => $year])->num_rows();
        $data['mar2'] = $this->db->get_where('darah_keluar', ['bulan' => 3, 'tahun' => $year])->num_rows();
        $data['apr2'] = $this->db->get_where('darah_keluar', ['bulan' => 4, 'tahun' => $year])->num_rows();
        $data['mei2'] = $this->db->get_where('darah_keluar', ['bulan' => 5, 'tahun' => $year])->num_rows();
        $data['jun2'] = $this->db->get_where('darah_keluar', ['bulan' => 6, 'tahun' => $year])->num_rows();
        $data['jul2'] = $this->db->get_where('darah_keluar', ['bulan' => 7, 'tahun' => $year])->num_rows();
        $data['ags2'] = $this->db->get_where('darah_keluar', ['bulan' => 8, 'tahun' => $year])->num_rows();
        $data['sep2'] = $this->db->get_where('darah_keluar', ['bulan' => 9, 'tahun' => $year])->num_rows();
        $data['okt2'] = $this->db->get_where('darah_keluar', ['bulan' => 10, 'tahun' => $year])->num_rows();
        $data['nov2'] = $this->db->get_where('darah_keluar', ['bulan' => 11, 'tahun' => $year])->num_rows();
        $data['des2'] = $this->db->get_where('darah_keluar', ['bulan' => 12, 'tahun' => $year])->num_rows();

        $this->load->view('pimpinan/printfilter', $data);
    }

    public function printDashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['tahun'] = $this->db->get('data_pendonor')->result_array();



        // CHart MAsuk Hari Ini

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
        // Chart Masuk
        $data['jan'] = $this->db->get_where('data_pendonor', ['bulan' => 1, 'tahun' => date('Y')])->num_rows();
        $data['feb'] = $this->db->get_where('data_pendonor', ['bulan' => 2, 'tahun' => date('Y')])->num_rows();
        $data['mar'] = $this->db->get_where('data_pendonor', ['bulan' => 3, 'tahun' => date('Y')])->num_rows();
        $data['apr'] = $this->db->get_where('data_pendonor', ['bulan' => 4, 'tahun' => date('Y')])->num_rows();
        $data['mei'] = $this->db->get_where('data_pendonor', ['bulan' => 5, 'tahun' => date('Y')])->num_rows();
        $data['jun'] = $this->db->get_where('data_pendonor', ['bulan' => 6, 'tahun' => date('Y')])->num_rows();
        $data['jul'] = $this->db->get_where('data_pendonor', ['bulan' => 7, 'tahun' => date('Y')])->num_rows();
        $data['ags'] = $this->db->get_where('data_pendonor', ['bulan' => 8, 'tahun' => date('Y')])->num_rows();
        $data['sep'] = $this->db->get_where('data_pendonor', ['bulan' => 9, 'tahun' => date('Y')])->num_rows();
        $data['okt'] = $this->db->get_where('data_pendonor', ['bulan' => 10, 'tahun' => date('Y')])->num_rows();
        $data['nov'] = $this->db->get_where('data_pendonor', ['bulan' => 11, 'tahun' => date('Y')])->num_rows();
        $data['des'] = $this->db->get_where('data_pendonor', ['bulan' => 12, 'tahun' => date('Y')])->num_rows();
        // Chart Keluar
        $data['jan2'] = $this->db->get_where('darah_keluar', ['bulan' => 1, 'tahun' => date('Y')])->num_rows();
        $data['feb2'] = $this->db->get_where('darah_keluar', ['bulan' => 2, 'tahun' => date('Y')])->num_rows();
        $data['mar2'] = $this->db->get_where('darah_keluar', ['bulan' => 3, 'tahun' => date('Y')])->num_rows();
        $data['apr2'] = $this->db->get_where('darah_keluar', ['bulan' => 4, 'tahun' => date('Y')])->num_rows();
        $data['mei2'] = $this->db->get_where('darah_keluar', ['bulan' => 5, 'tahun' => date('Y')])->num_rows();
        $data['jun2'] = $this->db->get_where('darah_keluar', ['bulan' => 6, 'tahun' => date('Y')])->num_rows();
        $data['jul2'] = $this->db->get_where('darah_keluar', ['bulan' => 7, 'tahun' => date('Y')])->num_rows();
        $data['ags2'] = $this->db->get_where('darah_keluar', ['bulan' => 8, 'tahun' => date('Y')])->num_rows();
        $data['sep2'] = $this->db->get_where('darah_keluar', ['bulan' => 9, 'tahun' => date('Y')])->num_rows();
        $data['okt2'] = $this->db->get_where('darah_keluar', ['bulan' => 10, 'tahun' => date('Y')])->num_rows();
        $data['nov2'] = $this->db->get_where('darah_keluar', ['bulan' => 11, 'tahun' => date('Y')])->num_rows();
        $data['des2'] = $this->db->get_where('darah_keluar', ['bulan' => 12, 'tahun' => date('Y')])->num_rows();
        // Chart Darah Masuk Bulan
        $t1 = $this->db->get_where('data_pendonor', ['tanggal' => 1, 'tahun' => date('Y')])->num_rows();
        $t2 = $this->db->get_where('data_pendonor', ['tanggal' => 2, 'tahun' => date('Y')])->num_rows();
        $t3 = $this->db->get_where('data_pendonor', ['tanggal' => 3, 'tahun' => date('Y')])->num_rows();
        $t4 = $this->db->get_where('data_pendonor', ['tanggal' => 4, 'tahun' => date('Y')])->num_rows();
        $t5 = $this->db->get_where('data_pendonor', ['tanggal' => 5, 'tahun' => date('Y')])->num_rows();
        $t6 = $this->db->get_where('data_pendonor', ['tanggal' => 6, 'tahun' => date('Y')])->num_rows();
        $t7 = $this->db->get_where('data_pendonor', ['tanggal' => 7, 'tahun' => date('Y')])->num_rows();
        $data['m1'] = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7;
        $t8 = $this->db->get_where('data_pendonor', ['tanggal' => 8, 'tahun' => date('Y')])->num_rows();
        $t9 = $this->db->get_where('data_pendonor', ['tanggal' => 9, 'tahun' => date('Y')])->num_rows();
        $t10 = $this->db->get_where('data_pendonor', ['tanggal' => 10, 'tahun' => date('Y')])->num_rows();
        $t11 = $this->db->get_where('data_pendonor', ['tanggal' => 11, 'tahun' => date('Y')])->num_rows();
        $t12 = $this->db->get_where('data_pendonor', ['tanggal' => 12, 'tahun' => date('Y')])->num_rows();
        $t13 = $this->db->get_where('data_pendonor', ['tanggal' => 13, 'tahun' => date('Y')])->num_rows();
        $t14 = $this->db->get_where('data_pendonor', ['tanggal' => 14, 'tahun' => date('Y')])->num_rows();
        $data['m2'] = $t8 + $t9 + $t10 + $t11 + $t12 + $t13 + $t14;
        $t15 = $this->db->get_where('data_pendonor', ['tanggal' => 15, 'tahun' => date('Y')])->num_rows();
        $t16 = $this->db->get_where('data_pendonor', ['tanggal' => 16, 'tahun' => date('Y')])->num_rows();
        $t17 = $this->db->get_where('data_pendonor', ['tanggal' => 17, 'tahun' => date('Y')])->num_rows();
        $t18 = $this->db->get_where('data_pendonor', ['tanggal' => 18, 'tahun' => date('Y')])->num_rows();
        $t19 = $this->db->get_where('data_pendonor', ['tanggal' => 19, 'tahun' => date('Y')])->num_rows();
        $t20 = $this->db->get_where('data_pendonor', ['tanggal' => 20, 'tahun' => date('Y')])->num_rows();
        $t21 = $this->db->get_where('data_pendonor', ['tanggal' => 21, 'tahun' => date('Y')])->num_rows();
        $data['m3'] = $t15 + $t16 + $t17 + $t18 + $t19 + $t20 + $t21;
        $t22 = $this->db->get_where('data_pendonor', ['tanggal' => 22, 'tahun' => date('Y')])->num_rows();
        $t23 = $this->db->get_where('data_pendonor', ['tanggal' => 23, 'tahun' => date('Y')])->num_rows();
        $t24 = $this->db->get_where('data_pendonor', ['tanggal' => 24, 'tahun' => date('Y')])->num_rows();
        $t25 = $this->db->get_where('data_pendonor', ['tanggal' => 25, 'tahun' => date('Y')])->num_rows();
        $t26 = $this->db->get_where('data_pendonor', ['tanggal' => 26, 'tahun' => date('Y')])->num_rows();
        $t27 = $this->db->get_where('data_pendonor', ['tanggal' => 27, 'tahun' => date('Y')])->num_rows();
        $t28 = $this->db->get_where('data_pendonor', ['tanggal' => 28, 'tahun' => date('Y')])->num_rows();
        $t29 = $this->db->get_where('data_pendonor', ['tanggal' => 29, 'tahun' => date('Y')])->num_rows();
        $t30 = $this->db->get_where('data_pendonor', ['tanggal' => 30, 'tahun' => date('Y')])->num_rows();
        $t31 = $this->db->get_where('data_pendonor', ['tanggal' => 31, 'tahun' => date('Y')])->num_rows();
        $data['m4'] = $t22 + $t23 + $t24 + $t25 + $t26 + $t27 + $t28 + $t29 + $t30 + $t31;
        // Chart Darah Keluar Bulan
        $t1 = $this->db->get_where('darah_keluar', ['tanggal' => 1, 'tahun' => date('Y')])->num_rows();
        $t2 = $this->db->get_where('darah_keluar', ['tanggal' => 2, 'tahun' => date('Y')])->num_rows();
        $t3 = $this->db->get_where('darah_keluar', ['tanggal' => 3, 'tahun' => date('Y')])->num_rows();
        $t4 = $this->db->get_where('darah_keluar', ['tanggal' => 4, 'tahun' => date('Y')])->num_rows();
        $t5 = $this->db->get_where('darah_keluar', ['tanggal' => 5, 'tahun' => date('Y')])->num_rows();
        $t6 = $this->db->get_where('darah_keluar', ['tanggal' => 6, 'tahun' => date('Y')])->num_rows();
        $t7 = $this->db->get_where('darah_keluar', ['tanggal' => 7, 'tahun' => date('Y')])->num_rows();
        $data['m1Q'] = $t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7;
        $t8 = $this->db->get_where('darah_keluar', ['tanggal' => 8, 'tahun' => date('Y')])->num_rows();
        $t9 = $this->db->get_where('darah_keluar', ['tanggal' => 9, 'tahun' => date('Y')])->num_rows();
        $t10 = $this->db->get_where('darah_keluar', ['tanggal' => 10, 'tahun' => date('Y')])->num_rows();
        $t11 = $this->db->get_where('darah_keluar', ['tanggal' => 11, 'tahun' => date('Y')])->num_rows();
        $t12 = $this->db->get_where('darah_keluar', ['tanggal' => 12, 'tahun' => date('Y')])->num_rows();
        $t13 = $this->db->get_where('darah_keluar', ['tanggal' => 13, 'tahun' => date('Y')])->num_rows();
        $t14 = $this->db->get_where('darah_keluar', ['tanggal' => 14, 'tahun' => date('Y')])->num_rows();
        $data['m2Q'] = $t8 + $t9 + $t10 + $t11 + $t12 + $t13 + $t14;
        $t15 = $this->db->get_where('darah_keluar', ['tanggal' => 15, 'tahun' => date('Y')])->num_rows();
        $t16 = $this->db->get_where('darah_keluar', ['tanggal' => 16, 'tahun' => date('Y')])->num_rows();
        $t17 = $this->db->get_where('darah_keluar', ['tanggal' => 17, 'tahun' => date('Y')])->num_rows();
        $t18 = $this->db->get_where('darah_keluar', ['tanggal' => 18, 'tahun' => date('Y')])->num_rows();
        $t19 = $this->db->get_where('darah_keluar', ['tanggal' => 19, 'tahun' => date('Y')])->num_rows();
        $t20 = $this->db->get_where('darah_keluar', ['tanggal' => 20, 'tahun' => date('Y')])->num_rows();
        $t21 = $this->db->get_where('darah_keluar', ['tanggal' => 21, 'tahun' => date('Y')])->num_rows();
        $data['m3Q'] = $t15 + $t16 + $t17 + $t18 + $t19 + $t20 + $t21;
        $t22 = $this->db->get_where('darah_keluar', ['tanggal' => 22, 'tahun' => date('Y')])->num_rows();
        $t23 = $this->db->get_where('darah_keluar', ['tanggal' => 23, 'tahun' => date('Y')])->num_rows();
        $t24 = $this->db->get_where('darah_keluar', ['tanggal' => 24, 'tahun' => date('Y')])->num_rows();
        $t25 = $this->db->get_where('darah_keluar', ['tanggal' => 25, 'tahun' => date('Y')])->num_rows();
        $t26 = $this->db->get_where('darah_keluar', ['tanggal' => 26, 'tahun' => date('Y')])->num_rows();
        $t27 = $this->db->get_where('darah_keluar', ['tanggal' => 27, 'tahun' => date('Y')])->num_rows();
        $t28 = $this->db->get_where('darah_keluar', ['tanggal' => 28, 'tahun' => date('Y')])->num_rows();
        $t29 = $this->db->get_where('darah_keluar', ['tanggal' => 29, 'tahun' => date('Y')])->num_rows();
        $t30 = $this->db->get_where('darah_keluar', ['tanggal' => 30, 'tahun' => date('Y')])->num_rows();
        $t31 = $this->db->get_where('darah_keluar', ['tanggal' => 31, 'tahun' => date('Y')])->num_rows();
        $data['m4Q'] = $t22 + $t23 + $t24 + $t25 + $t26 + $t27 + $t28 + $t29 + $t30 + $t31;



        $this->load->view('pimpinan/print', $data);
    }
}
