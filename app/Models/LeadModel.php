<?php

namespace App\Models;

use CodeIgniter\Model;

class LeadModel extends Model
{
    protected $table      = 'leads';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'celular', 'regiao', 'area_atuacao'];
    protected $useTimestamps = true;
    protected $updatedField  = '';
}
