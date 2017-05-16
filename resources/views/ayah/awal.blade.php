@extends('master_admin')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Ayah</strong>
		<a href="{{url('ayah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Ayah</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $ayah)
		<td>{{ $x++ }}</td>
		<td>{{ $ayah->nama or 'nama Kosong'}}</td>
		<td>{{ $ayah->ttl or 'ttl Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<Button><a href="{{url('ayah/edit/'.$ayah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a></Button>
				<Button><a href="{{url('ayah/lihat/'.$ayah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a></Button>
				<Button><a href="{{url('ayah/hapus/'.$ayah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a></Button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop