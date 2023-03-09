<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Redirect;
use View;

class KaryawanController extends Controller
{
    public function viewkaryawan()
    {
    	$data = DB::table('karyawans')->get();
    	return View::make('/viewkaryawan')->with('karyawans', $data);
    }
    public function addkaryawan()
    {
        return View('/addkaryawan');
    }
    public function formaddkaryawan()
    {
        $data = array(
            'id_karyawan' => IdGenerator::generate(['table' => 'karyawans', 'field' => 'id_karyawan', 'length' => 4, 'prefix' => '3']),
            'nama_karyawan' => Request()->get('nama_karyawan'),
            'jabatan' => Request()->get('jabatan'),
            'email' => Request()->get('email'),
            'no_hp' => Request()->get('no_hp'),
            'alamat' => Request()->get('alamat')
        );
        DB::table('karyawans')->insert($data);
        return Redirect::to('/viewkaryawan');
    }
    public function editkaryawan($id_karyawan)
    {
    	$data = DB::table('karyawans')->where('id_karyawan','=',$id_karyawan)->get();
    	return View('/editkaryawan',['karyawans' => $data]);
    }
    public function formeditkaryawan()
    {
    	$data = array(
            'id_karyawan' => Request()->get('id_karyawan'),
            'nama_karyawan' => Request()->get('nama_karyawan'),
            'jabatan' => Request()->get('jabatan'),
            'email' => Request()->get('email'),
            'no_hp' => Request()->get('no_hp'),
            'alamat' => Request()->get('alamat')
        );
        DB::table('karyawans')->where('id_karyawan','=',request()->get('id_karyawan'))->update($data);
        return Redirect::to('/viewkaryawan');
    }
    public function deletekaryawan($id_karyawan)
    {
    	DB::table('karyawans')->where('id_karyawan','=',$id_karyawan)->delete();
    	return Redirect::to('/viewkaryawan');
    }
}