<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfilWebsite extends Model
{

    public function dataProfilWeb($id_profil_website)
    {
        return $this->db->table('profil_website')
            ->where('id_profil_website', $id_profil_website)
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('profil_website')->where('id_profil_website', $data['id_profil_website'])->update($data);
    }
}
