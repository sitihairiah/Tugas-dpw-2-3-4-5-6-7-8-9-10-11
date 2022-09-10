<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller{


    function showcart(){
        return view('frontview.cart');
    }

    function showcheckout(){
        return view('frontview.checkout');
    }

    function showprodukdetail(){
        return view('frontview.produkdetail');
    }

    function showindex(){
        return view('frontview.index');
    }
 
    function showproduklist(){
        $data['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::simplePaginate(6);
        return view('frontview.produklist', $data);
    }

    function showmyaccount(){
        return view('frontview.myaccount');
    }

    function showwhislist(){
        return view('frontview.whislist');
    }

    function showcontct(){
        return view('frontview.contact');
    }



    function showcolegan(){
        return view('backview.colegan');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

 
    function showproduk2(){
        return view('backview.produk2');
    }

    function showpromo(){
        return view('backview.promo');
    }

   
    function showsupplier(){
        return view('backview.supplier');
    }

    function showuser(){
        return view('backview.user');
    }

    
    function showregister(){
        return view('frontview.register');
    }


    function showregister2(){
        return view('backview.register2');
    }

   

  
}