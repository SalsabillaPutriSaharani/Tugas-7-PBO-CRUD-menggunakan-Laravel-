<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();

        return view('datapelajar',compact('data'));
    }
    public function tambahpelajar(){
   return view('tambahdata');
    }
    public function insertdata(Request $request){
      
        $data = Mahasiswa::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopelajar/' , $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pelajar')->with('success', 'Data Telah Berhasil Ditambahkan');
    }
    public function tampilkandata($id){
        $data = Mahasiswa::find($id);
       return view('tampildata',compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data ->update($request->all());
        return redirect()->route('pelajar')->with('success', 'Data Telah Berhasil Diedit');

    }
    public function delete($id){
        $data = Mahasiswa::find($id);
        $data ->delete();
        return redirect()->route('pelajar')->with('success', 'Data Telah Berhasil Dihapus');
}

}