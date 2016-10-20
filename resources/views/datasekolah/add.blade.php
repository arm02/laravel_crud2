@extends('app')

@section('header')
<title>Laravel &raquo; Artikel &raquo; Add</title>
@endsection

@section('content')

<div class="row">
	<br>
	<form class="col s12" method="POST"
		action="{{url('datasekolah/save')}}"
		enctype="multipart/form-data">

		<div class="input-field col s12">
		<input id="nama" type="text" 
		class="validate" name="nama">
		<label for="nama">Nama Sekolah</label>
		</div>

		<div class="input-field col s12">
		<input id="alamat" type="text"
		class="validate"
		name="alamat"></input>
		<label for="alamat">Alamat</label>
		</div>	

		<div class="input-field col s12">
		<input id="kota" type="text"
		class="validate"
		name="kota"></input>
		<label for="kota">Kota</label>
		</div>	

		<div class="input-field col s12">
		<input id="npsn" type="text"
		class="validate"
		name="npsn"></input>
		<label for="npsn">NPSN</label>
		</div>	
                        		
		<div class="right">
			<button type="submit"
				class="btn">Save</button>
				</div>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
					</form>
					</div>
					@endsection

