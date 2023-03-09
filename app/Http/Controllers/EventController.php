<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\event;
use DB;
use Redirect;
use View;

class EventController extends Controller
{
    public function buyevent($id_paket)
    {
        $data = DB::table('pakets')->where('id_paket', $id_paket)->get();
        return View('/transaksievent')
        ->with('pakets',$data);
    }
    public function formbuyevent()
    {
        $data = array(
            'id_event' => IdGenerator::generate(['table' => 'events', 'field' => 'id_event', 'length' => 4, 'prefix' => '5']),
            'id_paket' => Request()->get('id_paket'),
            'nama_event' => Request()->get('nama_event'),
            'nama_pengelola' => Request()->get('nama_pengelola'),
            'isi_paket' => Request()->get('isi_paket'),
            'harga' => Request()->get('harga'),
            'tanggal' => Request()->get('tanggal')
        );
        DB::table('events')->insert($data);
        return Redirect::to('/index1');
    }
    public function viewevent()
    {
    	$data = DB::table('events')->get();
    	return View::make('/viewevent')->with('events', $data);
    }
    public function editevent($id_event)
    {
    	$data = DB::table('events')->where('id_event','=',$id_event)->get();
    	return View('/editevent',['events' => $data]);
    }
    public function formeditevent()
    {
    	$data = array(
            'id_event' => Request()->get('id_event'),
            'id_paket' => Request()->get('id_paket'),
            'nama_event' => Request()->get('nama_event'),
            'nama_pengelola' => Request()->get('nama_pengelola'),
            'isi_paket' => Request()->get('isi_paket'),
            'harga' => Request()->get('harga'),
            'tanggal' => Request()->get('tanggal')
        );
        DB::table('events')->where('id_event','=',request()->get('id_event'))->update($data);
        return Redirect::to('/viewevent');
    }
    public function deleteevent($id_event)
    {
    	DB::table('events')->where('id_event','=',$id_event)->delete();
    	return Redirect::to('/viewevent');
    }
}