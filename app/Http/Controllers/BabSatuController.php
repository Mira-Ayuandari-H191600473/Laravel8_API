<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BabSatuController;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Artikel;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    //soal1
    //Tampilkan artikel dengan id=5 users_id=1
    public function a1(){
        $artikels=Artikel::where('id', 5)->where('users_id', 1)->get();
        return $artikels;
    }

    //soal2
    //Tampilkan artikel dengan id=4 atau id=5 dengan pengurutan berdasarkan id descending
    public function a2(){
        $artikels=Artikel::where('id', 4)->orWhere('id', 5)->orderBy ('id','desc')->get();
        return $artikels;
    }

    //soal3
    //Tampilkan artikel dengan id=4 dan user dengan nama=Zamira Agustina S.Pt
    public function a3(){
        $artikels=Artikel::where('id', 4)->whereHas('user', function (Builder $query){
            $query->where('name','Zamira Agustina S.Pt');
        })->with('user')->get();
        return $artikels;
    }

    //soal4
    //Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dengan galeri id=1 sertakan galerinya
    public function a4(){
        $pengumumans=Pengumuman::whereHas('user', function (Builder $query){
            $query->whereHas('galeris', function (Builder $query){
                $query->where ('id', 1);
            });
        })->with('user.galeris')->get();
        return $pengumumans;
    }
}
