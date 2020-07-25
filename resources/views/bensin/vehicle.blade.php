@extends('layouts.master')

@section('header')
	<h2>Daftar Jenis Kendaraan</h2>
@stop

@section('content')
	<a href="bensin" class="btn btn-primary">Tabel Bensin</a>
	<button class="btn btn-primary" disabled="">Tabel Kendaraan</button>
	<br>
	<button type="button" class="btn btn-primary" style="margin-top: 5px;" disabled="">Tambah</button>
	<table class="table table-bordered table-responsive" style="margin-top: 10px">
		<thead>
			<tr>
				<th>ID</th>
				<th>Jenis</th>
				<th colspan="2">Aksi</th>
			</tr>
			<tbody>
				@foreach($vehicles as $vehicle)
				<tr>
					<td>{{$vehicle -> id}}</td>
					<td>{{$vehicle -> jenis}}</td>
					<td>
						<button class="btn btn-success" disabled="">Ubah</button>
					</td>
					<td>
						<button class="btn btn-danger" disabled="">Hapus</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</thead>
	</table>
@stop

