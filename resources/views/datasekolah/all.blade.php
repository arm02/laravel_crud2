@extends('app')

@section('header')

	<title>Laravel &raquo; Artikel &raquo; All</title>

	@endsection

	@section('content')

	<br>
	<a class="waves-effect waves-light btn right"
		href="{{url('datasekolah/add')}}">Add New</a>
		<br>
		<br>
		<br>

		<table>
			<thread>
				<tr>
					<th>Nama Sekolah</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>NPSN</th>
					<th colspan="2">Action</th>
					</tr>
				</thread>

				<tbody>
				
				@foreach($datasekolah as $key)
					<tr>
						<td>{{$key->nama}}</td>
						<td>{{$key->alamat}}</td>
						<td>{{$key->kota}}</td>
						<td>{{$key->npsn}}</td>
						<td><a href="{{url('datasekolah/edit/'.$key->id)}}">
						Edit
						</a>
						</td>
						<td><a href="{{url('datasekolah/delete/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->nama}}?')">
						Delete
						</a>
						</tr>
						@endforeach

						@if(sizeof($datasekolah)==0)
						<tr>
						<td colspan="6" class="center">
							<div>No Data</div>
							<div><a href="{{url('datasekolah/add')}}"
							class="waves-effect waves-light btn">Add New</a></div></td></tr>

							@endif
				</tbody>
				</table>

				@endsection