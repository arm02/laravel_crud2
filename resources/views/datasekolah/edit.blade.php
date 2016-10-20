@extends('app')

@section('header')
<title>Laravel &raquo; Artikel &raquo; Edit</title>
@endsection

@section('content')

<div class="row">
	<br>
	<form class="col s12" method="POST"
		action="{{url('datasekolah/update')}}"
		enctype="multipart/form-data">

		<div class="input-field col s12">
		<input id="nama" type="text" 
		class="validate" name="nama"
		value="{{$datasekolah->nama}}">
		<label for="nama">Nama</label>
		</div>

		<div class="input-field col s12">
		<input id="alamat" type="text" 
		class="validate" name="alamat"
		value="{{$datasekolah->alamat}}">
		<label for="alamat">Alamat</label>
		</div>

		<div class="input-field col s12">
		<input id="kota" type="text" 
		class="validate" name="kota"
		value="{{$datasekolah->kota}}">
		<label for="kota">Kota</label>
		</div>

		<div class="input-field col s12">
		<input id="npsn" type="text" 
		class="validate" name="npsn"
		value="{{$datasekolah->npsn}}">
		<label for="npsn">NPSN</label>
		</div>

		<div class="right">
			<button type="submit"
				class="btn">Save</button>
				</div>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
					<input type="hidden" name="id"
					value="{{$datasekolah->id}}">
					</form>
					</div>
					@endsection