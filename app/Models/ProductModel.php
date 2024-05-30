<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    protected $allowedFields = ['name_product', 'price'];
}
?>