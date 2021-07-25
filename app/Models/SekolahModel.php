<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'ms_school';
    protected $primaryKey = 'id_school';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'slug', 'alamat', 'phone', 'invoice', 'gedung'];
    
    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // //protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [
    //                                 'name'=>'required|min_length[5]',
    //                                 'slug'=>'required|min_length[10]',
    //                                 'alamat' =>'required|min_length[10]',
    //                                 'phone' =>'required|min_length[10]',
    //                                 'invoice' =>'required|min_length[6]',
    //                                 'gedung' =>'required|min_length[5]'];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;


    public function getSekolah($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
