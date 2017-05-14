@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Rekam Medis</strong>
		<a href="{{url('rekammedis/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Rekam Medis</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Tensi Darah</th>
			<th>Gula Darah</th>
			<th>Kondisi</th>
			<th>Kolesrol</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $rekammedis)
		<td>{{ $x++ }}</td>
		<td>{{ $rekammedis->tensi_darah or 'Tensi Darah Kosong'}}</td>
		<td>{{ $rekammedis->gula_darah or 'Gula Darah Kosong'}}</td>
		<td>{{ $rekammedis->kondisi or 'Kondisi Kosong'}}</td>
		<td>{{ $rekammedis->kolestrol or 'Kolestrol Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<Button><a href="{{url('rekammedis/edit/'.$rekammedis->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a></Button>
				<Button><a href="{{url('rekammedis/lihat/'.$rekammedis->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a></Button>
				<Button><a href="{{url('rekammedis/hapus/'.$rekammedis->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a></Button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop