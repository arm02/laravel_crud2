<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class DataSekolah extends Controller
{

    public function all()
    {
    	$data['datasekolah'] = \App\data_sekolah::all();
    	return view('datasekolah.all')->with($data);
    }
        public function add()
    {
    	return view('datasekolah.add');
    }
        public function edit($id)
    {
    	$data['datasekolah']=\App\data_sekolah::find($id);
		return view('datasekolah.edit')->with($data);
    }
       public function save()
    {
    	$a = new \App\data_sekolah;
    	$a->nama = Input::get('nama');
    	$a->alamat = Input::get('alamat');
    	$a->kota = Input::get('kota');
    	$a->npsn = Input::get('npsn');
    	$a->save();
    	return redirect(url('datasekolah/all'));
    }
        public function update()
    {
    	$a = \App\data_sekolah::find(Input::get('id'));
    	$a->nama = Input::get('nama');
    	$a->alamat = Input::get('alamat');
    	$a->kota = Input::get('kota');
    	$a->npsn = Input::get('npsn');
    	$a->save();
    	return redirect(url('datasekolah/all'));
    }
        public function delete($id)
    {
    	$a = \App\data_sekolah::find($id);
    	$a->delete();

    	return redirect(url('datasekolah/all'));
    }
}
