<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog_model;

class KatalogController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mykatalog = new Katalog_model();
        $katalog = $mykatalog->tampil_katalog();
        
        $data = array('katalog' => $katalog);
        return view('katalog/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('katalog/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('katalog')
         ->insert([
             'nama_katalog' => $request->nama_katalog,
             'penerbit'  =>  $request->penerbit,
             'pengarang'  =>  $request->pengarang,
             
         ]);
         return redirect('katalog');
     }
     public function edit_yosi($id_katalog){
        // return ('Testing');
        $views_master_yosi = \DB::table('katalog')->where('id_katalog', $id_katalog)->first();
        //dd($views_master);
        $data = array('katalog => $katalog);
        return view('katalog/edit', $id_katalog);
    }

    public function edit_proses_yosi(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('katalog')->where('id_perkiraan',$request->id_perkiraan)
        ->update([
            'nama_katalog' => $request->nama_katalog,
            'penerbit'  =>  $request->penerbit,
            'pengarang'  =>  $request->pengarang,
             ]);
        return redirect('views_master_yosi');
    }

    public function delete_yosi ($id_perkiraan){
        $query = \DB::table('katalog')->where('id_perkiraan',$id_perkiraan)->delete();
        return redirect('views_master_yosi');
    }
}
