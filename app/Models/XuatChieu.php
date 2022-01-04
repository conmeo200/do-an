<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XuatChieu extends Model
{
    use HasFactory;
    protected $table ="xuatchieu";

    public function Phim(){
        return $this->belongToMany(Phim::class,'ql_phim_xc');
    }
}
