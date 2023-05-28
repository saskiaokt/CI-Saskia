<?php

namespace App\Controllers;

use App\Models\ModelProfilWebsite;
use App\Models\ModelEvent;
use App\Models\ModelPendaftaran;

class Landing extends BaseController
{
    private $ModelProfilWebsite;
    private $ModelEvent;
    private $ModelPendaftaran;

    public function __construct()
    {
        helper('form');
        $this->ModelProfilWebsite = new ModelProfilWebsite();
        $this->ModelEvent = new ModelEvent();
        $this->ModelPendaftaran = new ModelPendaftaran();
    }

    // Halaman Landing Page
    public function index()
    {
        $data = [
            'title'             => 'E-Event',
            'website'           => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'             => $this->ModelEvent->dataEvent(),
            'jumlahEvent'       => $this->ModelEvent->jumlahEvent(),
            'jumlahPendaftar'   => $this->ModelPendaftaran->jumlahPendaftaran(),
            'isi_landing'       => 'landing/v_index'
        ];
        return view('layout/v_wrapper_landing', $data);
    }

    // Halaman Detail Event
    public function detailEvent($id_event)
    {
        $data = [
            'title'         => 'Detail Event',
            'website'       => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'         => $this->ModelEvent->detailDataEvent($id_event),
            'isi_landing'   => 'landing/v_detailEvent'
        ];
        return view('layout/v_wrapper_landing', $data);
    }

    // Halaman Pendaftaran Event
    public function pendaftaran($id_event)
    {
        $data = [
            'title'         => 'Pendaftaran Event',
            'website'       => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'         => $this->ModelEvent->detailDataEvent($id_event),
            'isi_landing'   => 'landing/v_formPendaftaranEvent'
        ];
        return view('layout/v_wrapper_landing', $data);
    }

    // Proses Pendaftaran Event
    public function prosesPendaftaran()
    {
        $pendaftaranValid = [
            'email' => [
                'label' => 'Email',
                'rules' => 'is_unique[pendaftaran.email]',
                'errors' => [
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
        ];

        if ($this->validate($pendaftaranValid)) {
            $data = [
                'nama_lengkap'      => $this->request->getPost('nama_lengkap'),
                'id_event'          => $this->request->getPost('id_event'),
                'email'             => $this->request->getPost('email'),
                'wa'                => $this->request->getPost('wa'),
                'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
                'alamat'            => $this->request->getPost('alamat'),
                'tanggal_daftar'    => date('Y-m-d'),
            ];

            $this->ModelPendaftaran->tambah($data);
            $dataTerakhir = $this->ModelPendaftaran->dataTerakhir();
            session()->setFlashdata('pesan', 'Anda berhasil melakukan pendaftaran!!!');

            return redirect()->to(base_url('landing/hasilPendaftaran/' . $dataTerakhir['id_pendaftaran']));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    // Halaman Hasil Pendaftaran
    public function hasilPendaftaran($id_pendaftaran)
    {
        $data = [
            'title'         => 'Hasil Pendaftaran Event',
            'website'       => $this->ModelProfilWebsite->dataProfilWeb(1),
            'pendaftaran'   => $this->ModelPendaftaran->detail($id_pendaftaran),
            'isi_landing'   => 'landing/v_hasilPendaftaranEvent'
        ];
        return view('layout/v_wrapper_landing', $data);
    }
}
