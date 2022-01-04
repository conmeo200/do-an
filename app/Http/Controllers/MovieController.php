<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\ql_phim_xc;
use App\Models\Type_Phim;
use App\Models\XuatChieu;
use App\Models\Phong;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\File;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim=Type_Phim::getType();
        return view('admin.managerfilm',['phim'=>$phim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suatchieu=$request->suatchieu;
        $pxhieu=$request->phongchieu;
        $film_new = new Phim();
        $film_new->TenPhim=$request->NameTP;
        $film_new->NoiDung=$request->noidung;
        $film_new->ID_Loai=$request->get('loaiphim');
        if($request->fileToUpload){
            $data=$request->fileToUpload->getClientOriginalName();

            $request->image=$request->fileToUpload->move(public_path('source\img\IMG'),$data);
            $film_new->image=$data;
        }
        $film_new->save();
        $data= Phim::where('TenPhim',$film_new->TenPhim)->select('ID')->get();
        foreach($data as $value)
        {
            $TAM=($value->ID);
        }    
        $array_sc= Array();
        $array_pc= Array();
        $array_sc=$suatchieu;
        $array_pc=$pxhieu; 
            foreach($array_sc as $value){
                $ql_xc =new ql_phim_xc();
                $ql_xc->ID_Phim=$TAM;
                $ql_xc->ID_XC=$value;
                foreach($array_pc as $key=>$value1){
                    $ql_xc->SoPhong=$value1; 
                    unset($array_pc[$key]);
                    break;
                };
                 $ql_xc->save();
            }; 
        return redirect()->back()->with('messe','You have successfully upload image.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film =Type_Phim::getFilm($id);  
        $qlXC=ql_phim_xc::getAll($id);
        return view('admin.editfilm',['data'=>$film,'qlXC'=>$qlXC]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $suatchieu=$request->suatchieu;
            $pxhieu=$request->phongchieu;
            $film_new = new Phim();
            $film_new->TenPhim=$request->NameTP;
            $film_new->NoiDung=$request->noidung;
            $film_new->ID_Loai=$request->get('loaiphim');
            if($request->fileToUpload){
                $data=$request->fileToUpload->getClientOriginalName();

                $request->image=$request->fileToUpload->move(public_path('source\img\IMG'),$data);
                $film_new->image=$data;
            }
            $updatePhim=DB::table('phim')
                            ->where('ID',$id)
                            ->update([
                                'TenPhim'=>$film_new->TenPhim,
                                'NoiDung'=>$film_new->NoiDung,
                                'ID_Loai'=>$film_new->ID_Loai,
                                'image'  =>$film_new->image
                            ]);
                $data= Phim::where('ID',$id)->select('ID')->get();
                foreach($data as $value)
                {
                    $TAM=($value->ID);
                }    
                $array_sc= Array();
                $array_pc= Array();
                $array_sc=$suatchieu;
                $array_pc=$pxhieu; 
                    foreach($array_sc as $value){
                        $ql_xc =new ql_phim_xc();
                        $ql_xc->ID_Phim=$TAM;
                        $ql_xc->ID_XC=$value;
                        foreach($array_pc as $key=>$value1){
                            $ql_xc->SoPhong=$value1; 
                            unset($array_pc[$key]);
                            break;
                        };
                        
                            $qlPhim=DB::table('ql_phim_xc')
                                    ->where('ID_Phim',$id)
                                    ->update([
                                        'ID_XC'=>$ql_xc->ID_XC,
                                        'ID_Phim'=>$ql_xc->ID_Phim,
                                        'SoPhong' =>$ql_xc->SoPhong
                                    ]);
                    }; 
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film=Phim::find('ID',$id);
        $film->delete();
        return redirect()->route('')->with("messe","Xoa thanh cong !");
    }
}
