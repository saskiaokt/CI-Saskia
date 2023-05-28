<?php

namespace App\Controllers;

use App\Models\ModelEvent;
use App\Models\ModelProfilWebsite;

class Event extends BaseController
{
    private $ModelEvent;
    private $ModelProfilWebsite;

    public function __construct()
    {
        helper('form');
        $this->ModelEvent = new ModelEvent();
        $this->ModelProfilWebsite = new ModelProfilWebsite();
    }

    // Halaman Event
    public function index()
    {

        $data = [
            'title'     => 'Kelola Event',
            'event'     => $this->ModelEvent->dataEvent(),
            'website'   => $this->ModelProfilWebsite->dataProfilWeb(1),
            'isi'       => 'admin/event/v_index'
        ];
        return view('layout/v_wrapper', $data);
    }

    // Halaman Tambah Event
    public function tambah()
    {

        $data = [
            'title'     => 'Tambah Event',
            'website'   => $this->ModelProfilWebsite->dataProfilWeb(1),
            'isi'       => 'admin/event/v_tambah'
        ];
        return view('layout/v_wrapper', $data);
    }

    // Proses Tambah Event
    public function prosesTambah()
    {
        $eventValid = [
            'nama_event' => [
                'label' => 'Nama event',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal_event' => [
                'label' => 'Tanggal Event',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'deskripsi' => [
                'label' => 'Deskripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'gambar' => [
                'label' => 'Gambar',
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded'  => '{field} wajib diisi.',
                    'max_size'  => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in'   => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($eventValid)) {
            //jika valid
            //mengambil data foto di form
            $gambar = $this->request->getFile('gambar');
            //mengganti nama 
            $nameFoto = $gambar->getRandomName();

            $data = [
                'nama_event'    => $this->request->getPost('nama_event'),
                'tanggal_event' => $this->request->getPost('tanggal_event'),
                'deskripsi'     => $this->request->getPost('deskripsi'),
                'gambar'        => $nameFoto,
            ];
            // memindahkan lokasi foto
            $gambar->move('gambar_event', $nameFoto);

            $this->ModelEvent->tambah($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!!');

            return redirect()->to(base_url('event'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }
    }

    // Halaman Edit Event
    public function edit($id_event)
    {

        $data = [
            'title'     => 'Edit Event',
            'website'   => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'     => $this->ModelEvent->detailDataEvent($id_event),
            'isi'       => 'admin/event/v_edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    // Proses Edit Event
    public function prosesEdit($id_event)
    {
        $eventvalid = [
            'nama_event' => [
                'label' => 'Nama event',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal_event' => [
                'label' => 'Tanggal Event',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'deskripsi' => [
                'label' => 'Deskripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'gambar' => [
                'label' => 'Gambar',
                'rules' => 'max_size[gambar,2024]|mime_in[gambar,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
        ];

        if ($this->validate($eventvalid)) {
            //jika valid
            //mengambil data foto di form
            $gambar = $this->request->getFile('gambar');

            if ($gambar->getError() == 4) {
                $data = [
                    'id_event'      => $id_event,
                    'nama_event'    => $this->request->getPost('nama_event'),
                    'tanggal_event' => $this->request->getPost('tanggal_event'),
                    'deskripsi'     => $this->request->getPost('deskripsi')
                ];
                $this->ModelEvent->edit($data);
            } else {
                //menghapus foto lama
                $event = $this->ModelEvent->detailDataEvent($id_event);
                if ($event['gambar'] != "") {
                    unlink('gambar_event/' . $event['gambar']);
                }
                //mengganti nama 
                $nameFoto = $gambar->getRandomName();

                $data = [
                    'id_event'      => $id_event,
                    'nama_event'    => $this->request->getPost('nama_event'),
                    'tanggal_event' => $this->request->getPost('tanggal_event'),
                    'deskripsi'     => $this->request->getPost('deskripsi'),
                    'gambar'        => $nameFoto,
                ];
                // memindahkan lokasi foto
                $gambar->move('gambar_event', $nameFoto);
                $this->ModelEvent->edit($data);
            }

            session()->setFlashdata('pesan', 'Data Berhasil Diedit!!!');
            return redirect()->to(base_url('event'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('event/edit/' . $id_event));
        }
    }

    // Halaman Detail Event
    public function detail($id_event)
    {

        $data = [
            'title'     => 'Detail Event PPDB',
            'website'   => $this->ModelProfilWebsite->dataProfilWeb(1),
            'event'     => $this->ModelEvent->detailDataEvent($id_event),
            'isi'       => 'admin/event/v_detail'
        ];
        return view('layout/v_wrapper', $data);
    }

    // Proses Hapus Event
    public function hapus($id_event)
    {
        //menghapus foto lama
        $event = $this->ModelEvent->detailDataEvent($id_event);
        if ($event['gambar'] != "") {
            unlink('gambar_event/' . $event['gambar']);
        }

        $data = [
            'id_event'   => $id_event,
        ];

        $this->ModelEvent->hapusDataEvent($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('event'));
    }
}
