<?php

namespace App\Controllers;

use App\Models\ModelProfilWebsite;
use App\Models\ModelEvent;
use App\Models\ModelPendaftaran;
use App\Models\ModelUser;

class Admin extends BaseController
{

    private $ModelProfilWebsite;
    private $ModelEvent;
    private $ModelPendaftaran;
    private $ModelUser;

    public function __construct()
    {
        $this->ModelProfilWebsite = new ModelProfilWebsite();
        $this->ModelEvent = new ModelEvent();
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelUser = new ModelUser();
    }

    // DASHBOARD
    public function index()
    {

        $data = [
            'title'             => 'Dashboard',
            'website'           => $this->ModelProfilWebsite->dataProfilWeb(1),
            'jumlahEvent'       => $this->ModelEvent->jumlahEvent(),
            'jumlahPendaftaran' => $this->ModelPendaftaran->jumlahPendaftaran(),
            'jumlahUser'        => $this->ModelUser->jumlahUser(),
            'isi'               => 'v_admin'
        ];
        return view('layout/v_wrapper', $data);
    }
}
