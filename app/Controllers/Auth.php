<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use App\Models\ModelProfilWebsite;
use App\Models\ModelUser;

class Auth extends BaseController
{
    private $ModelAuth;
    private $ModelUser;
    private $ModelProfilWebsite;

    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
        $this->ModelUser = new ModelUser();
        $this->ModelProfilWebsite = new ModelProfilWebsite();
    }

    // Halaman Login
    public function index()
    {
        $data = [
            'title'     => 'Login',
            'website'   => $this->ModelProfilWebsite->dataProfilWeb(1),
            'isi_auth'  => 'v_login'
        ];
        return view('layout/v_wrapper_auth', $data);
    }

    // Proses Login
    public function cek_login()
    {

        $loginValid = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ],
            ],
        ];

        if ($this->validate($loginValid)) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $data_user = $this->ModelAuth->data_user($username, $password);
            $cekVerifikasi = $this->ModelAuth->cekVerifikasi($username);

            if ($data_user) {
                # code...
                if ($cekVerifikasi['status_verifikasi'] == 'Sudah Verifikasi') {

                    if ($data_user['role'] == 'Admin') {
                        $cek_admin = $this->ModelAuth->login_admin($username, $password);
                        if ($cek_admin) {
                            //jika data cocok
                            session()->set('id_user', $cek_admin['id_user']);
                            session()->set('nama', $cek_admin['nama_user']);
                            session()->set('email', $cek_admin['email']);
                            session()->set('username', $cek_admin['username']);
                            session()->set('role', $cek_admin['role']);
                            session()->set('foto', $cek_admin['foto']);

                            return redirect()->to(base_url('admin'));
                        } else {
                            //jika data tidak cocok
                            session()->setFlashdata('pesan', 'Login gagal!!! Username atau password salah.');
                            return redirect()->to(base_url('Auth/index'));
                        }
                    } else if ($data_user['role'] == 'Calon Siswa') {
                        $cek_calon_siswa = $this->ModelAuth->login_calon_siswa($username, $password);
                        if ($cek_calon_siswa) {
                            //jika data cocok
                            session()->set('id_user', $cek_calon_siswa['id_user']);
                            session()->set('nama', $cek_calon_siswa['nama_user']);
                            session()->set('email', $cek_calon_siswa['email']);
                            session()->set('username', $cek_calon_siswa['username']);
                            session()->set('role', $cek_calon_siswa['role']);
                            session()->set('foto', $cek_calon_siswa['foto']);

                            return redirect()->to(base_url('calonsiswa'));
                        } else {
                            //jika data tidak cocok
                            session()->setFlashdata('pesan', 'Login gagal!!! Username atau password salah.');
                            return redirect()->to(base_url('Auth/index'));
                        }
                    }
                } else {
                    //jika data tidak cocok
                    session()->setFlashdata('pesan', 'Anda Belum Verifikasi Email. Silahkan Cek Email Untuk Verifikasi Agar Bisa Login. Jika Tidak Ada Dipesan Utama Email, Maka Cek Juga Dipesan Spam Email!!!');
                    return redirect()->to(base_url('Auth/index'));
                }
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login gagal!!! Username atau password salah.');
                return redirect()->to(base_url('Auth/index'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/index'));
        }
    }

    // logout
    public function logout()
    {
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('username');
        session()->remove('email');
        session()->remove('nama');
        session()->remove('foto');
        session()->remove('role');

        session()->setFlashdata('success', 'Logout Berhasil !!!');
        return redirect()->to(base_url('Auth/index'));
    }
}
