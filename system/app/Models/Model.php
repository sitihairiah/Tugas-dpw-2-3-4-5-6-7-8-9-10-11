<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel{
    protected $table = 'produk';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga'=> 'decitimal:2'
    ];

    function seller(){
        return $this->belongtosTo(user::class, 'id_user');
    }
    function getHargaStringAttribute(){
    }
        
    
}