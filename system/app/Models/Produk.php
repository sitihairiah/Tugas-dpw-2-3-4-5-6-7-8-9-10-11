<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\User;
use App\models\Traits\Attributes\ProdukAttributes;
use App\models\Traits\Relations\ProdukRelations;

class Produk extends Model{


    use ProdukAttributes, ProdukRelations;
    protected $table = 'produk';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga' => 'decimal:2'
    ];

    // function handleUploadFoto(){
    //     if(request()->hasFile('foto')){
    //         $foto =request()->file('foto');
    //         $destination ="images/produk";
    //         $randomStr =Str::random(5);
    //         $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
    //         $url =$foto->storeAs($destination,$filename);
    //         $this->foto = "app/".$url;
    //         $this->save();

    //     }
    // }
   
    function seller(){
        return $this->belongsTo(user::class, 'id_user' );
    }
    
}