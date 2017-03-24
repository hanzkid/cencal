@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Acara</h1>
@stop

@section('content')
<a href="/admin/acara/tambah"><button class="btn btn-primary"><i class="fa fa-plus fa-blue"></i> Tambah Acara</button></a><hr />
<div class="box">
	<div class="box-body">
	    <table class="tabeluser display table table-bordered table-hover dataTable" role="grid">
	    	<thead>
	    		<tr>
		    		<td>Id</td>
		    		<td>Nama</td>
		    		<td>Deskripsi</td>
		    		<td>Panitia</td>
		    		<td>Verified</td>
		    		<td>Status</td>
		    		<td>Tanggal Mulai</td>
		    		<td>Tanggal Akhir</td>
		    		<td>Pilihan</td>
		    	</tr>
	    	</thead>
	    	<tbody>
	    	@foreach($acaras as $acara)
	    		<tr>
	    			<td>{{$acara->id}}</td>
	    			<td>{{ucfirst($acara->nama)}}</td>
	    			<td>{{ucfirst($acara->deskripsi)}}</td>
	    			<td>{{$acara->panitia->nama}}</td>
	    			<td>
	    				@if($acara->is_verified == 0) Belum diverifikasi
	    				@else Terverifikasi
	    				@endif
	    			</td>
	    			<td>@if($acara->status == 1)
	    			Aktif
	    			@else
	    			Tidak Aktif
	    			@endif
	    			<td>{{$acara->created_at}}</td>
	    			<td>{{$acara->updated_at}}</td>
	    			<td><a href="/admin/acara/edit/{{$acara->id}}"><i class="fa fa-edit"></i></a> | <btn id="#delete" href="/admin/acara/delete/{{$acara->id}}"><i class="fa fa-trash"></i></btn></td>
	    		</tr>
	    	@endforeach
	    	</tbody>
	    </table>
	</div>
</div>

@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
	    $('.tabeluser').DataTable({
	    	"ordering": false
	    });
	    $("btn").click(function() {
            var href = $(this).attr('href');
            swal({
                title: 'Anda Yakin?',
                text: "Anda tidak bisa mengembalikan yang telah hilang",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#009688',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal!'
                }).then(function () {
                    swal(
                        'Terhapus!',
                        'Pemilihan anda telah dihapus.',
                        'sukses'
                    )
                    window.location.href= href;
                })
        }); 
	} );
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.js"></script>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
@stop