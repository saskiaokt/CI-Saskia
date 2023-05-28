<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{

    public function dataPendaftaran()
    {
        return $this->db->table('pendaftaran')
            ->join('event', 'event.id_event = pendaftaran.id_event', 'left')
            ->orderBy('tanggal_daftar', 'DESC')
            ->get()->getResultArray();
    }

    public function dataTerakhir()
    {
        return $this->db->table('pendaftaran')
            ->join('event', 'event.id_event = pendaftaran.id_event', 'left')
            ->orderBy('id_pendaftaran', 'DESC')
            ->limit(1)
            ->get()->getRowArray();
    }

    public function dataPendaftaranByEvent($id_event)
    {
        return $this->db->table('pendaftaran')
            ->join('event', 'event.id_event = pendaftaran.id_event', 'left')
            ->where('pendaftaran.id_event', $id_event)
            ->orderBy('tanggal_daftar', 'DESC')
            ->get()->getResultArray();
    }

    public function detail($id_pendaftaran)
    {
        return $this->db->table('pendaftaran')
            ->join('event', 'event.id_event = pendaftaran.id_event', 'left')
            ->where('id_pendaftaran', $id_pendaftaran)
            ->get()->getRowArray();
    }

    public function tambah($data)
    {
        $this->db->table('pendaftaran')->insert($data);
    }

    public function jumlahPendaftaran()
    {
        return $this->db->table('pendaftaran')
            ->countAllResults();
    }

    public function hapus($data)
    {
        $this->db->table('pendaftaran')->where('id_pendaftaran', $data['id_pendaftaran'])->delete($data);
    }
}
