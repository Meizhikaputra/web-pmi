<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    // MODEL PENDONOR SIANG
    public function getAllPendonor()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('data_pendonor')->result_array();
    }

    public function tambahPendonor()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            "nama" => $this->input->post('nama'),
            "jeniskelamin" => $this->input->post('jeniskelamin'),
            "tanggallahir" => $this->input->post('tanggallahir'),
            "alamatrumah" => $this->input->post('alamatrumah'),
            "notelepon" => $this->input->post('notelepon'),
            "golongandarah" => $this->input->post('golongandarah'),
            "donorkeberapa" => $this->input->post('donorkeberapa'),
            "macamdonor" => $this->input->post('macamdonor'),
            "tekanandarah" => $this->input->post('tekanandarah'),
            "beratbadan" => $this->input->post('beratbadan'),
            "rhesus" => $this->input->post('rhesus'),
            "ditolak" => $this->input->post('ditolak'),
            "ujisaring" => $this->input->post('ujisaring'),
            "nokantong" => $this->input->post('nokantong'),
            "tempatdonor" => $this->input->post('tempatdonor'),
            "date_created" => time(),
            "bulan" => date('m'),
            "jam" => date('G:i:s'),
            "tanggal" => date('d')

        ];
        $this->db->insert('data_pendonor', $data);
    }

    public function hapusPendonor($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_pendonor');
    }

    public function detailPendonor($id)
    {
        return $this->db->get_where('data_pendonor', ['id' => $id])->row_array();
    }

    public function ubahpendonor()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "jeniskelamin" => $this->input->post('jeniskelamin'),
            "tanggallahir" => $this->input->post('tanggallahir'),
            "alamatrumah" => $this->input->post('alamatrumah'),
            "notelepon" => $this->input->post('notelepon'),
            "golongandarah" => $this->input->post('golongandarah'),
            "donorkeberapa" => $this->input->post('donorkeberapa'),
            "macamdonor" => $this->input->post('macamdonor'),
            "tekanandarah" => $this->input->post('tekanandarah'),
            "beratbadan" => $this->input->post('beratbadan'),
            "rhesus" => $this->input->post('rhesus'),
            "ditolak" => $this->input->post('ditolak'),
            "ujisaring" => $this->input->post('ujisaring'),
            "nokantong" => $this->input->post('nokantong'),
            "tempatdonor" => $this->input->post('tempatdonor')

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_pendonor', $data);
    }

    public function cari($keyword)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('golongandarah', $keyword);
        return $this->db->get('data_pendonor')->result_array();
    }

    // MODEL DARAH KELUAR
    public function darahKeluar()
    {

        $this->db->order_by('id', 'DESC');
        return $this->db->get('darah_keluar')->result_array();
    }

    public function tambahKeluar()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [

            "nama" => $this->input->post('nama'),
            "golongandarah" => $this->input->post('golongandarah'),
            "nokantong" => $this->input->post('nokantong'),
            "rumahsakit" => $this->input->post('rumahsakit'),
            "date_created" => time(),
            "bulan" => date('m'),
            "tanggal" => date('d')



        ];
        $this->db->insert('darah_keluar', $data);
    }

    public function ubahKeluar()
    {

        $data = [
            "nama" => $this->input->post('nama'),
            "golongandarah" => $this->input->post('golongandarah'),
            "nokantong" => $this->input->post('nokantong'),
            "rumahsakit" => $this->input->post('rumahsakit'),

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('darah_keluar', $data);
    }

    public function detailKeluar($id)
    {
        return $this->db->get_where('darah_keluar', ['id' => $id])->row_array();
    }

    public function hapusKeluar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('darah_keluar');
    }

    // PAGE SIANG

    public function getSiang($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
        }
        return $this->db->get('data_pendonor', $limit, $start)->result_array();
    }

    public function total()
    {
        return $this->db->get('data_pendonor')->num_rows();
    }

    // PAGE KELUAR
    public function getKeluar($limit, $start, $keyword)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
        }
        $this->db->order_by('id', 'DESC');
        return $this->db->get('darah_keluar', $limit, $start)->result_array();
    }

    public function totalKeluar()
    {
        return $this->db->get('darah_keluar')->num_rows();
    }
}
