<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Ghe extends Model
{
    use HasFactory;
    protected $table="type_ghe";
    public function QL_Phong()
    {
        return $this->belongsTo(QL_Phong::class, 'SoPhong', 'ID');
    }
    public function P7()
    {
        return $this->hasMany(P7::class, 'ID_Loai', 'ID');
    }
    public function P8()
    {
        return $this->hasMany(P8::class, 'ID_Loai', 'ID');
    }
    public function P9()
    {
        return $this->hasMany(P9::class, 'ID_Loai', 'ID');
    }
    public function P10()
    {
        return $this->hasMany(P10::class, 'ID_Loai', 'ID');
    }
}
