<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $table = 'ms_school';
    protected $primaryKey = 'id_schools';
    protected $useTimestamps = true;
}
