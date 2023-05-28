<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEvent extends Model
{

    protected $table = "event";

    public function dataEvent()
    {
        return $this->db->table('event')
            ->orderBy('tanggal_event', 'DESC')
            ->get()->getResultArray();
    }

    public function tambah($data)
    {
        $this->db->table('event')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('event')->where('id_event', $data['id_event'])->update($data);
    }

    public function detailDataEvent($id_event)
    {
        return $this->db->table('event')
            ->where('id_event', $id_event)
            ->get()->getRowArray();
    }

    public function hapusDataEvent($data)
    {
        $this->db->table('event')->where('id_event', $data['id_event'])->delete($data);
    }

    public function jumlahEvent()
    {
        return $this->db->table('event')
            ->countAllResults();
    }
}
