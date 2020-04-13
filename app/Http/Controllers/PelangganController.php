<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelanggan;
class PelangganController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $title='Pelanggan';
        $Pelanggan=Pelanggan::paginate(20);
        return view('admin.beranda',compact('title','Pelanggan'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //ini untuk menampilkan form tambah data baru
    public function create()
    {
        $title='Input Pelanggan';
        return view('admin.InputPelanggan',compact('title'));
    }

    //ini untuk menambahkan data yang dimasukan di form tambah data ke dalam database
    public function store (Request $request){
        //validasi sisi server untuk mecegah kecurangan yang dilakukan oleh user
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'date' => 'Kolom :attribute harus berupa tanggal!',
            'numeric' => 'Kolom :attribute harus berupa angka!'
        ];

        $validasi =$request->validate([
            'nama' =>'required',
            'no_tlpn' => 'numeric',
            'status' => 'required'
        ],$messages);
        Pelanggan::create($validasi); //input ke database
        return redirect('beranda')->with('success', 'Data berhasil ditambahkan!'); //mengembalikan ke halaman beranda
    }

     //?   
    public function show($id){

    }

    //ini untuk menampilkan form edit data berdasarkan id yang dipilih 
    public function edit($id){
        $title='Input Pelanggan';
        $Pelanggan=Pelanggan::find($id);
        return view('admin.InputPelanggan',compact('title','Pelanggan'));
    }

    //ini untuk mengupdate data yang sudah diedit pada form edit ke dalam database
    public function update (Request $request, $id){
        //validasi sisi server untuk mecegah kecurangan yang dilakukan oleh user
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'date' => 'Kolom :attribute harus berupa tanggal!',
            'numeric' => 'Kolom :attribute harus berupa angka!'
        ];

        $validasi =$request->validate([
            'nama' =>'required',
            'no_tlpn' => 'numeric',
            'status' => 'required'
        ],$messages);
        Pelanggan::whereid($id)->update($validasi); //update ke database
        return redirect('beranda')->with('success', 'Data berhasil diupdate!'); //mengembalikan ke halaman beranda
    }

    //ini untuk menghapus data di dalam database berdasarkan id
    public function destroy($id){
    Pelanggan::whereid_Pelanggan($id)->delete(); //delete ke database
    return redirect('beranda')->with('success', 'Data berhasil diupdate!'); //mengembalikan ke halaman beranda

    }
}