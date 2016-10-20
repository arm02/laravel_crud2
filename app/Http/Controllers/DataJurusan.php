<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use App\Http\Requests;

class DataJurusan extends Controller
{
	    public function all()
    {
    	$data['datajurusan'] = \App\data_jurusan::all();

    	return view('datajurusan.all')->with($data);
    }
         public function add()
    {
    	$data['datajurusan'] = \App\data_sekolah::all();
    	return view('datajurusan.add')->with($data);
    }
            public function edit($id)
    {
    	$data['datajurusan']=\App\data_jurusan::find($id);
    	$data['datasekolah']=\App\data_sekolah::all();
		return view('datajurusan.edit')->with($data);
    }
          public function save()
    {
    	$a = new \App\data_jurusan;
    	$a->id_sekolah = Input::get('id_sekolah');
    	$a->nama = Input::get('nama');
    	$a->jumlah_siswa = Input::get('jumlah_siswa');
    	$a->save();
    	return redirect(url('datajurusan/all'));
    }
            public function delete($id)
    {
    	$a = \App\data_jurusan::find($id);
    	$a->delete();

    	return redirect(url('datajurusan/all'));
    }
}
