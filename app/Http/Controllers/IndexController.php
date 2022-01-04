<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\P7;
use App\Models\Type_Ve;
use App\Models\ql_phim_xc;

class IndexController extends Controller
{
    public function all()
    {
        $data=Phim::where('ID_Loai',1)->get();
        $data1=Phim::where('ID_Loai',2)->get();
        $data2=Phim::where('ID_Loai',3)->get();
        
        return view('Line.home',['data'=>$data,'data1'=>$data1,'data2'=>$data2]);
    }
    public function getType_Phim($id){
        $loai=Phim::where('ID_Loai',$id)->get();
        return view('Line.type_loaiphim',['loai'=>$loai]);
    }
    public function allChair($type,$id){
        $gia=Type_Ve::all();
        $film=Phim::where('Phim.ID',$type)->select('TenPhim')->get();
        $chair=P7::where('ID_Loai',$id)->select('ID','Status')->get();
        return view('Line.Chair',['chair'=>$chair,'film'=>$film,'gia'=>$gia]);
    }
    public function getFilm($type)
    {
        $film_type1=Phim::where('ID',$type)->get();
        $TG1=Phim::getTG($type);
        return view('Line.film_type',['film_type'=>$film_type1,'TG'=>$TG1]);

    }
}
