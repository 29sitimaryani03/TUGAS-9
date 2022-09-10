<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Produk extends Model{
    protected $table = 'produk';
    public $primaryKey = 'id';


    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'

    ];


    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaStringAttribute(){
        return "Rp. ".number_format($this->attributes['harga']);
    }

}