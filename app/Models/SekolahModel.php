<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $table = 'ms_school';
    protected $primaryKey = 'id_school';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'slug', 'alamat', 'phone', 'invoice', 'gedung'];


    public function getSekolah($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
