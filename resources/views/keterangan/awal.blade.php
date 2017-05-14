@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data proses_lahir</strong>
		<a href="{{url('proses_lahir/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">proses_lahir</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Proses Lahiran</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $proses_lahir)
		<td>{{ $x++ }}</td>
		<td>{{ $proses_lahir->keterangan or 'Keterangan Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<Button><a href="{{url('proses_lahir/edit/'.$proses_lahir->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a></Button>
				<Button><a href="{{url('proses_lahir/lihat/'.$proses_lahir->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a></Button>
				<Button><a href="{{url('proses_lahir/hapus/'.$proses_lahir->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a></Button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop