<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'ms_users';
    protected $primaryKey = 'id_users';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'username', 'password', 'phone', 'email', 'role', 'status'];
}