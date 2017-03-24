@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tambah Acara</h1>
@stop
@section('content')
	<form action="/admin/acara/tambah" method="POST" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<label>Nama Acara</label>
			<input name="nama" class="form-control" placeholder="Isi Nama Acara ..."></input>
		</div>
		<div class="form-group">
			<label>Deskripsi Acara</label>
			<textarea class="form-control" name="deskripsi" placeholder="Isi Deskripsi Acara ..."></textarea>
		</div>
		<div class="form-group">
			<label>Nama Panitia</label>
			<select name="panitia_id">
				@foreach($panitias as $panitia)
					<option class="form-class" value="{{$panitia->id}}">{{$panitia->nama}}</option>
				@endforeach
			</select>
		</div>
		<div class="input-group date" data-provide="datepicker">
    		<input name="tanggalmulai" type="text" class="form-control">
    			<div class="input-group-addon">
        			<span class="glyphicon glyphicon-th"></span>
    			</div>
		</div>
		<div class="input-group date" data-provide="datepicker">
    		<input name="tanggalakhir" type="text" class="form-control">
    			<div class="input-group-addon">
        			<span class="glyphicon glyphicon-th"></span>
    			</div>
		</div>
		<button type="submit" class="btn btn-primary">Buat Acara</button>
	</form>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
@stop
@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.date').datepicker({
		format: 'yyyy/mm/dd'
	});
});
</script>
@stop