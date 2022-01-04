<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phim;

class Type_Phim extends Model
{
    use HasFactory;
    protected $table="type_phim";
    public function Phim()
    {
        return $this->hasMany(Phim::class, 'ID_LOAI', 'ID');
    }
    public function getType()
    {
        $dataGetType=Type_Phim::join('Phim','Type_Phim.ID','=','Phim.ID_Loai')
                            ->select('Phim.ID','Type_Phim.Loai','Phim.NoiDung','Phim.image','Phim.TenPhim')
                            ->get();
        return $dataGetType;
    }
    public function getFilm($id)
    {
        $dataGetFlim=Type_Phim::join('Phim','Type_Phim.ID','=','Phim.ID_Loai')
                            ->where('Phim.ID',$id)
                            ->select('Phim.ID','Type_Phim.Loai','Phim.NoiDung','Phim.image','Phim.TenPhim','Phim.ID_Loai')
                            ->get();
        return $dataGetFlim;
    }
}
