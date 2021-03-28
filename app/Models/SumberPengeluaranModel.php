<?php

namespace App\Models;

use CodeIgniter\Model;

class SumberPengeluaranModel extends Model
{
    protected $table = 'sumber_pengeluaran';
    protected $primaryKey = 'id_sumber';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama'];
}
