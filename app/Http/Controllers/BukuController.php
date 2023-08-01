<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
     
        $data['buku'] = Buku::get();
        return view('buku/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('buku/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = Buku::insert([
             'nama' => $request->nama,
             'jenis' => $request->jenis,
             'harga' => $request->harga,
             'penerbit'  =>  $request->penerbit,
             'pengarang'  =>  $request->pengarang,
             
         ]);
         return redirect('buku');
     }
     public function edit($id){
        // return ('Testing');
        $data['buku'] = Buku::where('id', $id)->first();
        //dd($views_master);
        return view('buku/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');

             $query = Buku::where('id',$request->idbuku)
             ->update([
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'harga' => $request->harga,
                'penerbit'  =>  $request->penerbit,
                'pengarang'  =>  $request->pengarang,
                
            ]);
        return redirect('buku');
    }

    public function delete($id){
        $query = Buku::where('id',$id)->delete();
        return redirect('buku');
    }
}
