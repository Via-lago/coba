<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\pengunjung;
use DB;
use Redirect;
use View;

class PengunjungController extends Controller
{
    public function buypengunjung($id_menu)
    {
        $data = DB::table('menus')->where('id_menu', $id_menu)->get();
        return View('/transaksipengunjung')
        ->with('menus',$data);
    }
    public function formbuypengunjung()
    {
        $data = array(
            'id_pengunjung' => IdGenerator::generate(['table' => 'pengunjungs', 'field' => 'id_pengunjung', 'length' => 4, 'prefix' => '6']),
            'id_menu' => Request()->get('id_menu'),
            'nama_pengunjung' => Request()->get('nama_pengunjung'),
            'jenis_pengunjung' => Request()->get('jenis_pengunjung'),
            'nama_menu' => Request()->get('nama_menu'),
            'harga' => Request()->get('harga'),
            'tanggal' => Request()->get('tanggal')
        );
        DB::table('pengunjungs')->insert($data);
        return Redirect::to('/index1');
    }
    public function viewpengunjung()
    {
    	$data = DB::table('pengunjungs')->get();
    	return View::make('/viewpengunjung')->with('pengunjungs', $data);
    }
    public function editpengunjung($id_pengunjung)
    {
    	$data = DB::table('pengunjungs')->where('id_pengunjung','=',$id_pengunjung)->get();
    	return View('/editpengunjung',['pengunjungs' => $data]);
    }
    public function formeditpengunjung()
    {
    	$data = array(
            'id_pengunjung' => Request()->get('id_pengunjung'),
            'id_menu' => Request()->get('id_menu'),
            'nama_pengunjung' => Request()->get('nama_pengunjung'),
            'jenis_pengunjung' => Request()->get('jenis_pengunjung'),
            'nama_menu' => Request()->get('nama_menu'),
            'harga' => Request()->get('harga'),
            'tanggal' => Request()->get('tanggal')
        );
        DB::table('pengunjungs')->where('id_pengunjung','=',request()->get('id_pengunjung'))->update($data);
        return Redirect::to('/viewpengunjung');
    }
    public function deletepengunjung($id_pengunjung)
    {
    	DB::table('pengunjungs')->where('id_pengunjung','=',$id_pengunjung)->delete();
    	return Redirect::to('/viewpengunjung');
    }
}