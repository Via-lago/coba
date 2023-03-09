<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Redirect;
use View;

class DapurController extends Controller
{
    public function viewdapur()
    {
    	$data = DB::table('dapurs')->get();
    	return View::make('/viewdapur')->with('dapurs', $data);
    }
    public function adddapur()
    {
        return View('/adddapur');
    }
    public function formadddapur()
    {
        $data = array(
            'id_bahanbaku' => IdGenerator::generate(['table' => 'dapurs', 'field' => 'id_bahanbaku', 'length' => 4, 'prefix' => '4']),
            'nama_bahanbaku' => Request()->get('nama_bahanbaku'),
            'jenis_bahanbaku' => Request()->get('jenis_bahanbaku'),
            'jumlah_stok' => Request()->get('jumlah_stok')
        );
        DB::table('dapurs')->insert($data);
        return Redirect::to('/viewdapur');
    }
    public function editdapur($id_bahanbaku)
    {
    	$data = DB::table('dapurs')->where('id_bahanbaku','=',$id_bahanbaku)->get();
    	return View('/editdapur',['dapurs' => $data]);
    }
    public function formeditdapur()
    {
    	$data = array(
            'id_bahanbaku' => Request()->get('id_bahanbaku'),
            'nama_bahanbaku' => Request()->get('nama_bahanbaku'),
            'jenis_bahanbaku' => Request()->get('jenis_bahanbaku'),
            'jumlah_stok' => Request()->get('jumlah_stok')
        );
        DB::table('dapurs')->where('id_bahanbaku','=',request()->get('id_bahanbaku'))->update($data);
        return Redirect::to('/viewdapur');
    }
    public function deletedapur($id_bahanbaku)
    {
    	DB::table('dapurs')->where('id_bahanbaku','=',$id_bahanbaku)->delete();
    	return Redirect::to('/viewdapur');
    }
}