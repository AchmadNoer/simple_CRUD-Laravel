@extends('layouts.master')

@section('header')
	<h2>Edit Bensin List</h2>
@stop

@section('content')
	{!! Form::model($bensin,['route'=>['bensin.update',$bensin->id], 'method'=>'patch', 'class'=>'form-horizontal']) !!}
		<div class="form-group">
			{!! Form::label('nama', 'Nama', ['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('nama', null, ['class'=>'form-control']) !!}
				{!! $errors->has('nama')?$errors->first('nama'):'' !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('harga', 'Harga', ['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::number('harga', null, ['class'=>'form-control']) !!}
				{!! $errors->has('harga')?$errors->first('harga'):'' !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('ron', 'RON', ['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::text('ron', null, ['class'=>'form-control']) !!}
				{!! $errors->has('ron')?$errors->first('ron'):'' !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('id_vehicle', 'Jenis', ['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::number('id_vehicle', null, ['class'=>'form-control']) !!}
				{!! $errors->has('id_vehicle')?$errors->first('id_vehicle'):'' !!}
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
			</div>
		</div>
	{!! Form::close() !!}
@stop

