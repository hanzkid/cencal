@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sunting Acara</h1>
@stop
@section('content')
@foreach($acaras as $acara)
	<form action="/admin/acara/edit/{{$acara->id}}" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Acara</label>
			<input class="form-control" placeholder="Isi Nama Acara ..." value="{{$acara->nama}}"></input>
		</div>
		<div class="form-group">
			<label>Deskripsi Acara</label>
			<textarea class="form-control" name="deskripsi" placeholder="Isi Deskripsi Acara ...">{{ $acara->deskripsi }}</textarea>
		</div>
		
	</form>
@endforeach
@stop