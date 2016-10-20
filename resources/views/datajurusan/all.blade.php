@extends('app')

@section('header')

	<title>Laravel &raquo; Artikel &raquo; All</title>

	@endsection

	@section('content')

	<br>
	<a class="waves-effect waves-light btn right"
		href="{{url('datajurusan/add')}}">Add New</a>
		<br>
		<br>
		<br>

		<table>
			<thread>
				<tr>
					<th>Nama Sekolah</th>
					<th>Nama Jurusan</th>
					<th>Jumlah Siswa</th>
					<th colspan="2">Action</th>
					</tr>
				</thread>

				<tbody>
				
				@foreach($datajurusan as $key)
					<tr>
						<td>{{\App\data_sekolah::find($key->id_sekolah)['nama']}}</td>
						<td>{{$key->nama}}</td>
						<td>{{$key->jumlah_siswa}}</td>
						<td><a href="{{url('datajurusan/edit/'.$key->id)}}">
						Edit
						</a>
						</td>
						<td><a href="{{url('datajurusan/delete/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->nama}}?')">
						Delete
						</a>
						</tr>
						@endforeach
				</tbody>
				</table>

				@endsection