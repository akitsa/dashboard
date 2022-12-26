<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table="products";
    protected $guarded = ['id'];
    protected $primaryKey = 'id_prod';
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
