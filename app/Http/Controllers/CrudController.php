<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Redirect;
use View;

class CrudController extends Controller
{
    public function getlogin()
    {
        return View('/login');
    }
    public function postlogin(Request $request)
    {
        return View('index');
    }
    public function viewdata()
    {
    	$data = DB::table('menus')->get();
    	return View::make('/viewmenu')->with('menus', $data);
    }
    public function adddata()
    {
        return View('/addmenu');
    }
    public function formadd()
    {
        $data = array(
            'id_menu' => IdGenerator::generate(['table' => 'menus', 'field' => 'id_menu', 'length' => 4, 'prefix' => '1']),
            'nama_menu' => Request()->get('nama_menu'),
            'harga' => Request()->get('harga')
        );
        DB::table('menus')->insert($data);
        return Redirect::to('/viewmenu');
    }
    public function editdata($id_menu)
    {
    	$data = DB::table('menus')->where('id_menu','=',$id_menu)->get();
    	return View('/editmenu',['menus' => $data]);
    }
    public function formedit()
    {
    	$data = array(
            'id_menu' => Request()->get('id_menu'),
            'nama_menu' => Request()->get('nama_menu'),
            'harga' => Request()->get('harga')
        );
        DB::table('menus')->where('id_menu','=',request()->get('id_menu'))->update($data);
        return Redirect::to('/viewmenu');
    }
    public function deletedata($id_menu)
    {
    	DB::table('menus')->where('id_menu','=',$id_menu)->delete();
    	return Redirect::to('/viewmenu');
    }
    public function viewpaket()
    {
    	$data = DB::table('pakets')->get();
    	return View::make('/viewpaket')->with('pakets', $data);
    }
    public function addpaket()
    {
        return View('/addpaket');
    }
    public function formaddpaket()
    {
        $data = array(
            'id_paket' => IdGenerator::generate(['table' => 'pakets', 'field' => 'id_paket', 'length' => 4, 'prefix' => '2']),
            'nama_paket' => Request()->get('nama_paket'),
            'isi_paket' => Request()->get('isi_paket'),
            'harga' => Request()->get('harga')
        );
        DB::table('pakets')->insert($data);
        return Redirect::to('/viewpaket');
    }
    public function editpaket($id_paket)
    {
    	$data = DB::table('pakets')->where('id_paket','=',$id_paket)->get();
    	return View('/editpaket',['pakets' => $data]);
    }
    public function formeditpaket()
    {
    	$data = array(
            'id_paket' => Request()->get('id_paket'),
            'nama_paket' => Request()->get('nama_paket'),
            'isi_paket' => Request()->get('isi_paket'),
            'harga' => Request()->get('harga')
        );
        DB::table('pakets')->where('id_paket','=',request()->get('id_paket'))->update($data);
        return Redirect::to('/viewpaket');
    }
    public function deletepaket($id_paket)
    {
    	DB::table('pakets')->where('id_paket','=',$id_paket)->delete();
    	return Redirect::to('/viewpaket');
    }
    public function viewtransaksi()
    {
    	$data = DB::table('pakets')->get();
        $data1 = DB::table('menus')->get();
    	return View::make('/index1')
        ->with('pakets', $data)
        ->with('menus', $data1);
    }
}