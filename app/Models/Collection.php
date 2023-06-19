<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nama','daerah','detail','type','image','File','province_id'
    ];

    public function province() {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}
