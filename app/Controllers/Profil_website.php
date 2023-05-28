<?php

namespace App\Controllers;

use App\Models\ModelProfilWebsite;

class Profil_website extends BaseController
{

    private $ModelProfilWebsite;

    public function __construct()
    {
        helper('form');
        $this->ModelProfilWebsite = new ModelProfilWebsite();
    }

    // Halaman Profil Website
    public function index()
    {

        $data = [
            'title' => 'Kelola Profil Website',
            'website' => $this->ModelProfilWebsite->dataProfilWeb(1),
            'isi' => 'admin/profil_website/v_index'
        ];

        return view('layout/v_wrapper', $data);
    }

    // Proses Edit Profil Website
    public function prosesUpdate($id_profil_website)
    {
        $profilsekolahvalid = [
            'nama_website' => [
                'label' => 'Nama Website',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat Website',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'deskripsi_atas' => [
                'label' => 'Deskripsi Web Landing Home',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'deskripsi_bawah' => [
                'label' => 'Deskripsi Web Landing Profil Website',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'wa' => [
                'label' => 'Nomor Whatsapp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'logo' => [
                'label' => 'Logo',
                'rules' => 'max_size[logo,2024]|mime_in[logo,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'gambar_web1' => [
                'label' => 'Gambar Website 1',
                'rules' => 'max_size[gambar_web1,2024]|mime_in[gambar_web1,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ],
            'gambar_web2' => [
                'label' => 'Gambar Website 2',
                'rules' => 'max_size[gambar_web2,2024]|mime_in[gambar_web2,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 2 MB',
                    'max_size' => 'Format {field} Wajib PNG/JPG/JPEG',
                ]
            ]
        ];

        if ($this->validate($profilsekolahvalid)) {
            //jika valid
            //mengambil data foto di form
            $logo = $this->request->getFile('logo');
            $gambar_web1 = $this->request->getFile('gambar_web1');
            $gambar_web2 = $this->request->getFile('gambar_web2');

            if ($logo->getError() == 4) {
                $data = [
                    'id_profil_website' => $id_profil_website,
                    'nama_website' => $this->request->getPost('nama_website'),
                    'alamat' => $this->request->getPost('alamat'),
                    'deskripsi_atas' => $this->request->getPost('deskripsi_atas'),
                    'deskripsi_bawah' => $this->request->getPost('deskripsi_bawah'),
                    'email' => $this->request->getPost('email'),
                    'wa' => $this->request->getPost('wa')
                ];
                $this->ModelProfilWebsite->edit($data);
            } else {
                //menghapus foto lama
                $website = $this->ModelProfilWebsite->dataProfilWeb($id_profil_website);
                if ($website['logo'] != "") {
                    unlink('gambar_profil_website/' . $website['logo']);
                }

                $nameLogo = $logo->getRandomName();

                $data = [
                    'id_profil_website' => $id_profil_website,
                    'nama_website' => $this->request->getPost('nama_website'),
                    'alamat' => $this->request->getPost('alamat'),
                    'deskripsi_atas' => $this->request->getPost('deskripsi_atas'),
                    'deskripsi_bawah' => $this->request->getPost('deskripsi_bawah'),
                    'email' => $this->request->getPost('email'),
                    'wa' => $this->request->getPost('wa'),
                    'logo' => $nameLogo
                ];
                // memindahkan lokasi foto
                $logo->move('gambar_profil_website', $nameLogo);
                $this->ModelProfilWebsite->edit($data);
            }

            if ($gambar_web1->getError() == 4) {
                $data = [
                    'id_profil_website' => $id_profil_website,
                    'nama_website' => $this->request->getPost('nama_website'),
                    'alamat' => $this->request->getPost('alamat'),
                    'deskripsi_atas' => $this->request->getPost('deskripsi_atas'),
                    'deskripsi_bawah' => $this->request->getPost('deskripsi_bawah'),
                    'email' => $this->request->getPost('email'),
                    'wa' => $this->request->getPost('wa')
                ];
                $this->ModelProfilWebsite->edit($data);
            } else {
                $website = $this->ModelProfilWebsite->dataProfilWeb($id_profil_website);
                //menghapus foto lama
                if ($website['gambar_web1'] != "") {
                    unlink('gambar_profil_website/' . $website['gambar_web1']);
                }

                $nameWebsite1 = $gambar_web1->getRandomName();

                $data = [
                    'id_profil_website' => $id_profil_website,
                    'nama_website' => $this->request->getPost('nama_website'),
                    'alamat' => $this->request->getPost('alamat'),
                    'akreditasi' => $this->request->getPost('akreditasi'),
                    'jumlah_semua_siswa' => $this->request->getPost('jumlah_semua_siswa'),
                    'deskripsi_atas' => $this->request->getPost('deskripsi_atas'),
                    'deskripsi_bawah' => $this->request->getPost('deskripsi_bawah'),
                    'telepon' => $this->request->getPost('telepon'),
                    'email' => $this->request->getPost('email'),
                    'wa' => $this->request->getPost('wa'),
                    'gambar_web1' => $nameWebsite1,
                ];
                // memindahkan lokasi foto
                $gambar_web1->move('gambar_profil_website', $nameWebsite1);
                $this->ModelProfilWebsite->edit($data);
            }

            if ($gambar_web2->getError() == 4) {
                $data = [
                    'id_profil_website' => $id_profil_website,
                    'nama_website' => $this->request->getPost('nama_website'),
                    'alamat' => $this->request->getPost('alamat'),
                    'deskripsi_atas' => $this->request->getPost('deskripsi_atas'),
                    'deskripsi_bawah' => $this->request->getPost('deskripsi_bawah'),
                    'email' => $this->request->getPost('email'),
                    'wa' => $this->request->getPost('wa')
                ];
                $this->ModelProfilWebsite->edit($data);
            } else {
                $sekolah = $this->ModelProfilWebsite->dataProfilWeb($id_profil_website);
                //menghapus foto lama
                if ($sekolah['gambar_web2'] != "") {
                    unlink('gambar_profil_website/' . $sekolah['gambar_web2']);
                }

                $nameWeb2 = $gambar_web2->getRandomName();

                $data = [
                    'id_profil_website' => $id_profil_website,
                    'nama_website' => $this->request->getPost('nama_website'),
                    'alamat' => $this->request->getPost('alamat'),
                    'deskripsi_atas' => $this->request->getPost('deskripsi_atas'),
                    'deskripsi_bawah' => $this->request->getPost('deskripsi_bawah'),
                    'email' => $this->request->getPost('email'),
                    'wa' => $this->request->getPost('wa'),
                    'gambar_web2' => $nameWeb2,
                ];
                // memindahkan lokasi foto
                $gambar_web2->move('gambar_profil_website', $nameWeb2);
                $this->ModelProfilWebsite->edit($data);
            }

            session()->setFlashdata('pesan', 'Data Berhasil Diedit!!!');
            return redirect()->to(base_url('profil_website'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('profil_website'));
        }
    }
}
