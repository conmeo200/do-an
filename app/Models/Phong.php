<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;
    protected $table="phong";
    public function QL_Phong()
    {
        return $this->belongsTo(QLPhimXC::class, 'SoPhong', 'ID');
    }
    public function P7()
    {
        return $this->hasMany(P7::class, 'ID_Loai', 'ID');
    }
}
