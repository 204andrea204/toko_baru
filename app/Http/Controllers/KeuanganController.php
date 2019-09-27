<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Keuangan;
use \App\Saldo;

class KeuanganController extends Controller
{

	/*PEMASUKKAN*/
    public function indexpemasukan()
    {
        
        return view('admin.pemasukan.index');
    }

    public function addpemasukan()
    {
    	return view('admin.pemasukan.add');
    }
    public function savepemasukan(Request $r)
    {
    	$l = new Keuangan;
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "1";
    	$l->tipe = $tipe;
    	$l->save();
        $uang = $r->jumlah;
        $q = $r->saldo;
        $saldo = Saldo::find(1);
        $saldo->saldo = $q + $uang;
        $saldo->save();
    	return redirect(url('admin/pemasukan'));
    }
    public function editpemasukan($id)
    {	
    	$l = Keuangan::find($id);
    	return view('admin.pemasukan.edit')->with('l', $l);
    }
    public function updatepemasukan(Request $r)
    {
    	$l = Keuangan::find($r->input('id'));
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "1";
    	$l->tipe = $tipe;
    	$l->save();
        
    	return redirect(url('admin/pemasukan'));
    }
    public function deletepemasukan($id)
    {
    	$l =  Keuangan::find($id);
    	$l->delete();
    	return redirect(url('admin/pemasukan'));
    }




    /*PENGELUARAN*/

    public function indexpengeluaran()
    {
    	return view('admin.pengeluaran.index');
    }
    public function addpengeluaran()
    {
    	return view('admin.pengeluaran.add');
    }
    public function savepengeluaran(Request $r)
    {
    	$l = new Keuangan;
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "2";
    	$l->tipe = $tipe;
    	$l->save();
        $uang = $r->jumlah;
        $q = $r->saldo;
        $saldo = Saldo::find(1);
        $saldo->saldo = $q - $uang;
        $saldo->save();
    	return redirect(url('admin/pengeluaran'));
    }
    public function editpengeluaran($id)
    {	
    	$l = Keuangan::find($id);
    	return view('admin.pengeluaran.edit')->with('l', $l);
    }
    public function updatepengeluaran(Request $r)
    {
    	$l = Keuangan::find($r->input('id'));
    	$l->judul = $r->input('judul');
    	$l->jumlah = $r->input('jumlah');
    	$l->tanggal = $r->input('tanggal');
    	$l->rincian = $r->input('rincian');
    	$tipe = "2";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('admin/pengeluaran'));
    }
    public function deletepengeluaran($id)
    {
    	$l =  Keuangan::find($id);
    	$l->delete();
    	return redirect(url('admin/pengeluaran'));
    }



}
