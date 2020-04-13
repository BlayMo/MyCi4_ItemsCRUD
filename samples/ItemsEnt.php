<?php

namespace App\Entities;

use CodeIgniter\Entity;

class ItemsEnt extends Entity {

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $attributes = [
        'iditem' => null,
        'id_categoria' => null,
        'item' => null,
        'texto_item' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null
    ];

}
