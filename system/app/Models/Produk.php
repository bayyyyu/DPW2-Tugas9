<?php

namespace App\Models;

class Produk extends Model {
    protected $table = 'admin_produk';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga' => 'decimal:2'
    ];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaStringAttribute(){
        return "Rp. ".number_format($this->attributes['harga']);
    }

    

}