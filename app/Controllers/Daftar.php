<?php

namespace App\Controllers;

use App\Models\ModelProfilWebsite;
use App\Models\ModelPendaftaran;
use App\Models\ModelEvent;

class Daftar extends BaseController
{
    private $ModelProfilWebsite;
    private $ModelPendaftaran;
    private $ModelEvent;

    public function __construct()
    {
        helper('form');
        helper('download');
        $this->ModelProfilWebsite = new ModelProfilWebsite();
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelEvent = new ModelEvent();
    }

    // Halaman Pendaftaran
    public function index()
    {

        $data = [
            'title'         => 'Pendaftaran',
            'website'       => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'         => $this->ModelEvent->dataEvent(),
            'isi'           => 'admin/pendaftaran/v_index'
        ];

        return view('layout/v_wrapper', $data);
    }

    // Halaman Data Pendaftaran
    public function dataPendaftaran($id_event)
    {

        $data = [
            'title'         => 'Data Pendaftaran',
            'website'       => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'         => $this->ModelEvent->detailDataEvent($id_event),
            'pendaftaran'   => $this->ModelPendaftaran->dataPendaftaranByEvent($id_event),
            'isi'           => 'admin/pendaftaran/v_data_pendaftaran'
        ];

        return view('layout/v_wrapper', $data);
    }

    // Hapus Data Pendaftaran
    public function hapus($id_pendaftaran)
    {
        $detail = $this->ModelPendaftaran->detail($id_pendaftaran);

        $data = [
            'id_pendaftaran'   => $id_pendaftaran,
        ];

        $this->ModelPendaftaran->hapus($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('daftar/dataPendaftaran/' . $detail['id_event']));
    }
}
