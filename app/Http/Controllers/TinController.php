<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TinController extends Controller
{
    public function index(){
        return view("index");
    }

    public function chitiettin($id){
        $kq = DB::table("tin")->where("idTin", $id)->where("tin.AnHien", 1)
        ->Join('loaitin', 'loaitin.idLT', '=', 'tin.idLT')->Join('theloai', 'theloai.idTL', '=', 'tin.idTL')->first();
        $ykien = DB::table("tin")->where("tin.idTin", $id)->where("tin.AnHien", 1)
        ->Join('ykien', 'ykien.idTin', '=', 'tin.idTin')->get();
        $dembinhluan = DB::table("tin")->where("tin.idTin", $id)->where("tin.AnHien", 1)->Join('ykien', 'ykien.idTin', '=', 'tin.idTin')->count();
        DB::table('tin')->increment('SoLanXem');
        $tinlq = DB::table("tin")->where("idTin", $id)->where("tin.AnHien", 1)
        ->Join('loaitin', 'loaitin.idLT', '=', 'tin.idLT')->get();
        if ($kq == NULL) {echo "Khong ton tai tin nay"; return;}
        $data = ["tin"=>$kq, "ykien"=>$ykien, "dembinhluan"=>$dembinhluan, "tinlienquan"=>$tinlq];
        return view("chitiettin", $data);
    }

    public function tintrongloai($idLT, $pageNum=1){
        settype($idLT, "int");
        $kq = DB::table("tin")->select("idTin", "TieuDe", "TomTat", "urlHinh", "Ngay", "SoLanXem")
        ->where("idLT", $idLT)->where("AnHien",1)->paginate(10);

        $TenLT = DB::table("loaitin")->where("idLT", $idLT)->value("Ten");
        $idTL = DB::table("loaitin")->where("idLT", $idLT)->value("idTL");
        $TenTL = DB::table("theloai")->where("idTL", $idTL)->value("TenTL");
        $data = ["listtin"=>$kq, "idTL"=>$idTL, "TenTL"=>$TenTL, "idLT"=>$idLT, "TenLT"=>$TenLT];
        return view("tintrongloai", $data);
    }
    
    public function lienhe(){
        $d=array('title'=>'Liên hệ');
        return view('lienhe',$d);
    }
    public function baocao(){
        $d=array('title'=>'Báo cáo');
        return view('baocao',$d);
    }
}
