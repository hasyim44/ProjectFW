@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data ibu</strong>
		<a href="{{url('ibu/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">ibu</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>Suami</th>
			<th>Rekam Medis</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaibu as $ibu)
		<td>{{ $x++ }}</td>
		<td>{{ $ibu->nama or 'nama Kosong'}}</td>
		<td>{{ $ibu->ttl or 'ttl Kosong'}}</td>
		<td>{{ $ibu->ayah->nama or 'nama kosong'}}</td>
		<td>{{ $ibu->rekammedis->tensi_darah or 'tensi_darah kosong'}}</td>
		<td>{{ $ibu->rekammedis->gula_darah or 'gula_darah kosong'}}</td>
		<td>{{ $ibu->rekammedis->kondisi or 'kondisi kosong'}}</td>
		<td>{{ $ibu->rekammedis->kolestrol or 'kolestrol kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<Button><a href="{{url('ibu/edit/'.$ibu->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a></Button>
				<Button><a href="{{url('ibu/lihat/'.$ibu->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a></Button>
				<Button><a href="{{url('ibu/hapus/'.$ibu->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a></Button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop