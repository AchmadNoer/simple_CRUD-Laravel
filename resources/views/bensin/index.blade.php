@extends('layouts.master')

@section('header')
	<h2>Daftar Bensin</h2>
@stop

@section('content')
	<button class="btn btn-primary" disabled="">Tabel Bensin</button>
	<a href="vehicle" class="btn btn-primary">Tabel Kendaraan</a>
	<br>
	<a href="bensin/create" class="btn btn-primary" style="margin-top: 5px;">Tambah</a>
	<table class="table table-bordered table-responsive" style="margin-top: 10px">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>RON</th>
				<th>Jenis</th>
				<th colspan="2">Aksi</th>
			</tr>
			<tbody>
				@foreach($bensins as $bensin)
				<tr>
					<td>{{$bensin -> id}}</td>
					<td>{{$bensin -> nama}}</td>
					<td>{{$bensin -> harga}}</td>
					<td>{{$bensin -> ron}}</td>
					<td>{{$bensin -> jenis}}</td>
					<td>
						<a href="{{route('bensin.edit', $bensin->id)}}" class="btn btn-success">Ubah</a>
					</td>
					<td>
						{!! Form::open(['method'=>'delete', 'route'=>['bensin.destroy',$bensin->id]]) !!}
						{!! Form::submit('Hapus', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Apakah Anda yakin?")']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</thead>
	</table>
@stop

