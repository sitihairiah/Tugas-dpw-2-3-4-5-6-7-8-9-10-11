<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;


class ProdukController extends Controller{
    function index(){
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('produk.index', $data);
    }

    function create(){
        $data['list_user'] = User::all();
        return view('produk.create', $data);
        
    }

    function store(){

        
        $produk = new produk();
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->deskripsi = request('deskripsi');
        $produk->stok = request('stok');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(produk $produk){
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }
    function edit(produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }
    function update(produk $produk){
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->deskripsi = request('deskripsi');
        $produk->stok = request('stok');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');
    }

    function destroy(Produk $produk){
        $produk->handleDelete();
        $produk->delete();

        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    
        
    }
    
}