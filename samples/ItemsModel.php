<?php
    
namespace App\Models;
use CodeIgniter\Model;

class ItemsModel extends Model
{

    protected $table = 'items';
    
    protected $order = 'items.id_item DESC';
    
    protected $primaryKey = 'id_item';
    protected $returnType = 'App\Entities\ItemsEnt';

    protected $allowedFields = ['iditem', 'id_categoria', 'item',
        'texto_item', 'created_at', 'updated_at', 'deleted_at', ];

    protected $useTimestamps = false;
   
}
