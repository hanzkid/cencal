<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\acara;
use App\Panitia;
class AdminController extends Controller
{
    public function Index()
    {
    	return view('admin.dashboard');
    }
    public function acara()
    {
    	$acara = Acara::all();
    	return view('admin.acara',['acaras' => $acara]);
    }
    public function editacara($id)
    {
    	$acara = Acara::where('id',$id)->get();
    	return view('admin.acaraedit',['acaras' => $acara]);
    }
    public function deleteacara($id)
    {
        $acara = Acara::find($id);
        $acara->status = 0;
        $acara->save();
        return redirect('/admin/acara');
    }
    public function tambahacara(){
        $panitia = panitia::all();
        return view('admin.acaratambah',['panitias' => $panitia]);
    }
    public function posttambahacara(Request $request){
        $acara = new Acara();
        $acara->nama = $request['nama'];
        $acara->deskripsi =  $request['deskripsi'];
        $acara->panitia_id = $request['panitia_id'];
        $acara->tanggal_mulai = $request['tanggalmulai'];
        $acara->tanggal_berakhir= $request['tanggalakhir'];
        if($acara->save()){
            return redirect('/admin/acara');
        }
    }
}
