<?php

namespace App\Http\Controllers;

use App\Models\detailTransaksi;
use App\Models\produk;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class Usercontroller extends Controller
{
    public function login(){
        return view('login');
    }
    public function registrasi(){
        return view('registrasi');
    }
    
    public function produk(){
        $produk = produk::all();
        return view('produk', compact('produk'));
    }
    public function postlogin(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (!auth()->attempt($data)) {
            return redirect()->route('login');
        }
        return redirect()->route('produk');
    }

    public function detail(produk $produk){
        return view('detail', compact('produk'));
    }

    public function payment(Request $request, produk $produk) {
        $jumlah = $request->jumlah;
        return view('payment', compact(['produk', 'jumlah']));
    }

    public function postregistrasi(Request $request){
        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->email),
            'role'=>'customers'
        ]);
    }

    public function submitPayment(Request $request, produk $produk, string $jumlah) {
        $inv = "INV" . Str::random(20);

        $transaksi = transaksi::create([
            'invoice' => $inv,
            'user_id' => auth()->id(),
            'produk_id' => $produk->id
        ]);

       if($transaksi){
        detailTransaksi::create([
            'transaksi_id' => $transaksi->id,
            'jumlah' => $jumlah,
            'status' => 'Pending',
            'total_harga' => $produk->harga * $jumlah + 2000,
            'keterangan' => $request->keterangan
        ]);
       }

        return redirect()->route('produk');
    }

    public function keranjang() {
        $pesanan = transaksi::where('User_id', auth()->id())->with(['detailtransaksi', 'produk', 'user'])->get();
        return view('keranjang', compact('pesanan'));
    }

    public function pembayaran (Request $request){
        $idBarang = [];
        if(count($request->checkout) > 0){
            foreach ($request->checkout as $checkbox) {
                $idBarang[] = $checkbox;
            }
        }
        
        dd($idBarang);
        return view('layout.pembayaran');
    }

    public function bayar() {
        
    }
}
