<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Barang;
use App\Categori;
use App\Pesan;

class AdminController extends Controller
{

	/*CONTROLLER BARANG*/

    public function indexbarang()
    {
    	return view('admin.barang.index');
    }
    public function addbarang()
    {
    	return view('admin.barang.add');
    }
    public function savebarang(Request $r)
    {
    	$t = new Barang;
    	$t->nama = $r->input('nama');

    	$t->foto = $r->input('foto');
        $file = $r->file('foto');
        $filename = $file->getClientOriginalName();
        $r->file('foto')->move("picture/", $filename);
        $t->foto = $filename;

    	$t->harga = $r->input('harga');
    	$t->stok = $r->input('stok');
    	$t->berat = $r->input('berat');
    	$t->kategori = $r->input('kategori');
    	$t->deskripsi = $r->input('deskripsi');
    	
    	$t->save();
    	return redirect(url('admin/barang'));
    }
    public function editbarang($id)
    {
    	$barang = Barang::find($id);
    	return view('admin.barang.edit')->with('barang',$barang);
    }
    public function updatebarang(Request $m)
    {
    	$s = Barang::find($m->input('id'));
    	$s->nama = $m->input('nama');

        if($m->file('foto')){
            $file = $m->file('foto');
            $filename = $file->getClientOriginalName();
            $m->file('foto')->move("picture/", $filename);
            $s->foto = $filename;
        }

    	$s->harga = $m->input('harga');
        $s->stok = $m->input('stok');
        $s->berat = $m->input('berat');
        $s->kategori = $m->input('kategori');
        $s->deskripsi = $m->input('deskripsi');
        
    	$s->save();
    	return redirect(url('admin/barang'));
    }
    public function deletebarang($id)
    {
    	$barang = Barang::find($id);
    	$barang->delete();
    	return redirect(url('admin/barang'));
    }


    /*CATEGORI CONTROLLER*/

    public function indexcategori()
    {
    	return view('admin.categori.index');
    }
    public function addcategori()
    {
    	return view('admin.categori.add');
    }
    public function savecategori(Request $r)
    {
    	$t = new Categori;
    	$t->nama = $r->input('nama');  	
    	$t->save();
    	return redirect(url('admin/categori'));
    }
    public function editcategori($id)
    {
    	$categori = Categori::find($id);
    	return view('admin.categori.edit')->with('categori',$categori);
    }
    public function updatecategori(Request $m)
    {
    	$s = Categori::find($m->input('id'));
    	$s->nama = $m->input('nama');
    	$s->save();
    	return redirect(url('admin/categori'));
    }
    public function deletecategori($id)
    {
    	$categori = Categori::find($id);
    	$categori->delete();
    	return redirect(url('admin/categori'));
    }


    /*PEASAN CONTROLLER*/

    public function indexpesan()
    {
        return view('admin.pesan.index');
    }
    public function addpesan()
    {
        return view('admin.pesan.add');
    }
    public function savepesan(Request $r)
    {
        $p = new Pesan;
        $p->nama = $r->input('nama');
        $p->email = $r->input('email');
        $p->subjek = $r->input('subjek');
        $p->isi = $r->input('isi');
        $p->save();
        return redirect(url('admin/pesan'));
    }
    public function editpesan($id)
    {
        $pesan = Pesan::find($id);
        return view('admin.pesan.edit')->with('pesan',$pesan);
    }
    public function updatepesan(Request $r)
    {
        $p = Pesan::find($r->input('id'));
        $p->nama = $r->input('nama');
        $p->email = $r->input('email');
        $p->subjek = $r->input('subjek');
        $p->isi = $r->input('isi');
        $p->save();
        return redirect(url('admin/pesan'));
    }
    public function deletepesan($id)
    {
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect(url('admin/pesan'));
    }
}