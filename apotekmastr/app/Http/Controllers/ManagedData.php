<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Obat;
use App\User;
use App\Kategori;
use DB;
use Auth;
use Redirect;

class ManagedData extends Controller
{
    public function listkat()
    {
    	$data = DB::table('tbl_kategori')->paginate(10);

        $categories = kategori::lists('kategori', 'id_kategori');
    	return view('listkat')->with('kategori',$data,$categories);

    }

    public function liststok()
    {
    	$data = DB::table('tbl_obat')
    	->join('kategori','kategori.id_kategori','=','tbl_obat.id_kategori')
    	->select('tbl_obat.id_obat','kategori.kategori','tbl_obat.kode_obat','tbl_obat.nama_obat','tbl_obat.produsen','tbl_obat.distributor','tbl_obat.satuan','tbl_obat.harga_beli','tbl_obat.harga','tbl_obat.stok','tbl_obat.tgl_masuk','tbl_obat.tgl_edit')
    	->paginate(10);

    	return view('stokobat')->with('obat',$data);
    }

	public function transaksi()
    {
    	$data = DB::table('transaksi')
    	->join('users','users.id','=','transaksi.id')
    	->join('tbl_obat','tbl_obat.id_obat','=','transaksi.id_obat')
    	->join('kategori','kategori.id_kategori','=','transaksi.id_kategori')
    	->select('transaksi.*','users.username')
    	->paginate(10);

    	return view('listlogtransaksi')->with('transaksi',$data);
    }

    public function listuser()
    {
    	$data = DB::table('users')->paginate(10);

    	return view('listuser')->with('users',$data);
    }    
}
