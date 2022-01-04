<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\P7;

class ql_phim_xc extends Model
{
    use HasFactory;
    protected $table="ql_phim_xc";
    public function Phong()
    {
        return $this->hasMany(Phong::class, 'SoPhong', 'ID');
    }
    public function getChair($type,$id){
            $data=ql_phim_xc::join('Phim','Phim.ID','=','ql_phim_xc.ID_PHIM')
                                ->join('XuatChieu','XuatChieu.ID','=','ql_phim_xc.ID_XC')
                                ->join('Phhong','Phong.ID','=','ql_phim_xc.SoPhong')
                                ->join('P7','Phong.ID','=','P7.ID_Loai')
                                ->where('Phim.ID',$type,'P7.ID_Loai',$id)
                                ->select('P7.ID','Phim.TenPhim');
            return $data;
    }
    public function getAll($id){
        $data=ql_phim_xc::join('Phim','Phim.ID','=','ql_phim_xc.ID_Phim')
                        ->where('ql_phim_xc.ID_Phim',$id)
                        ->select('ql_phim_xc.ID_Phim','ql_phim_xc.ID_XC','ql_phim_xc.SoPhong')
                        ->get();
        return $data;
    }
   
}
