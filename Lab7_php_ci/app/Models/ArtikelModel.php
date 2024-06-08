<?php

namespace App\Models;

use CodeIgntier\Model;

class ArtikelModel extends Models
{
    protected $table = 'artikel';
    protected $primarykey ='id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];
}