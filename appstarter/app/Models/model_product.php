<?php

namespace App\Models;
use CodeIgniter\Model;

class model_product extends Model{
    protected $table = 'productsi';
    protected $primaryKey = 'id_product';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_product','name_product','detail_product'];
}