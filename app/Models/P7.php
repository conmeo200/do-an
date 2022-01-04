<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P7 extends Model
{
    use HasFactory;
    protected $table="p7";
    public function Phong()
    {
        return $this->belongsTo(Phong::class, 'ID_Loai', 'ID');
    }
    public function getChair($id)
    {
        $data=P7::where('ID',$id,'');
    }
}
