<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QLPHIMXC;
use App\Models\XuatChieu;
use App\Models\Phong;
use App\Models\P7;


class Phim extends Model
{
    use HasFactory;
    protected $table ="phim";
    public function XuatChieu(){
        return $this->belongToMany(XuatChieu::class,'ql_phim_xc');
    }
    public function Type_Phim()
    {
        return $this->beLongsTo(Type_Phim::class, 'ID_LOAI', 'ID');
    }
    public function getTG($type)
    {
        $data1=Phim::join('ql_phim_xc','ql_phim_xc.ID_PHIM','=','Phim.ID')
                ->join('XuatChieu','XuatChieu.ID','=','ql_phim_xc.ID_XC')
                ->where('ql_phim_xc.ID_PHIM',$type)
                ->select('XuatChieu.TG','ql_phim_xc.SoPhong')
                ->get();
        return $data1;
    }
   
}
