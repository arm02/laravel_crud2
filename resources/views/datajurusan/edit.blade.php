@extends('app')

@section('header')
<title>Laravel &raquo; Artikel &raquo; Add</title>
@endsection

@section('content')
<div class="row">
	<br>
	<form class="col s12" method="POST"
		action="{{url('datajurusan/save')}}"
		enctype="multipart/form-data">

		  <label>Nama Sekolah</label>
  <select class="browser-default" name="id_sekolah">
    <option value="{{$datajurusan->id}}">{{$datajurusan->nama}}</option>
  </select>
	
		<div class="input-field col s12">
		<input id="nama" type="text"
		class="validate"
		name="nama" value="{{$datajurusan->nama}}"></input>
		<label for="nama">Nama Jurusan</label>
		</div>	

		<div class="input-field col s12">
		<input id="jumlah_siswa" type="text"
		class="validate"
		name="jumlah_siswa" value="{{$datajurusan->jumlah_siswa}}"></input>
		<label for="jumlah_siswa">Jumlah Siswa</label>
		</div>	
                        		
		<div class="right">
			<button type="submit"
				class="btn">Save</button>
				</div>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
					<input type="hidden" name="id"
					value="{{$datajurusan->id}}">
					</form>
					</div>
					@endsection

