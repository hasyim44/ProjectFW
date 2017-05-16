@extends('master_admin')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data admin</strong>
		<a href="{{url('admin/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">admin</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $admin)
		<td>{{ $x++ }}</td>
		<td>{{ $admin->username or 'Username Kosong' }}</td>
		<td>{{ $admin->password or 'Password Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<Button><a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a></Button>
				<Button><a href="{{url('admin/lihat/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a></Button>
				<Button><a href="{{url('admin/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a></Button>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	